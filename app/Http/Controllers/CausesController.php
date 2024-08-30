<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Causes;
use Illuminate\Support\Facades\Storage; // إضافة هذه السطر

class CausesController extends Controller
{
    public function index()
    {
        $_Causes = Causes::take(3)->get();
    
        return response()->json([
            'status' => true,
            'Causes' => $_Causes
        ], 200);
    }

    public function store(Request $request)
    {
        if($request->hasFile('imgUrl')) {
            $image = $request->file('imgUrl');
            $imageName = time().'.'.$image->extension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
        
            $_Causes =  Causes::create([
                'name' => $request->name,
                'raised' => $request->raised,
                'goal' => $request->goal,
                'pre' => $request->pre,
                'imgUrl' => $imageName,
                'smallDisc' => $request->smallDisc,
                'desc' => $request->desc,
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'Causes Created successfully',
                'Causes' => $_Causes
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No image uploaded'
            ], 400);
        }
    }
}
