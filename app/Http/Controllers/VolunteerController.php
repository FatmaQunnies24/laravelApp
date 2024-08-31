<?php

namespace App\Http\Controllers;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class VolunteerController extends Controller
{
    public function index()
    {
        $_Volunteer = Volunteer::take(3)->get();
    
        return response()->json([
            'status' => true,
            'Volunteer' => $_Volunteer
        ], 200);
    }

    public function store(Request $request)
    {
        if($request->hasFile('imgUrl')) {
            $image = $request->file('imgUrl');
            $imageName = time().'.'.$image->extension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
        
            $_Volunteer =  Volunteer::create([
                'name' => $request->name,
                'info' => $request->info,
                'imgUrl' => $imageName,
                'facebook' => $request->facebook,
                'pinterest' => $request->pinterest,
                'linkedin' => $request->linkedin,
                'twitter' => $request->twitter,
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'Volunteer Created successfully',
                'Volunteer' => $_Volunteer
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No image uploaded'
            ], 400);
        }
    }
}
