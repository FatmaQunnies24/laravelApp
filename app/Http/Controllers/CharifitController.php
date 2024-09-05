<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Reason_of_helping;
use Illuminate\Support\Facades\Storage;

class CharifitController extends Controller
{
    
    public function index()
    {
        $_reason_of_helping = Reason_of_helping::take(3)->get();
    
        return response()->json([
            'status' => true,
            'reason_of_helping' => $_reason_of_helping
        ], 200);
    }

  
  

    public function store(Request $request)
    {

            // if($request->has('image')){
                $imageName = time().'.'.$request->image->extension();
                Storage::disk('public')->put($imageName, file_get_contents($request->image));
    
                $_reason_of_helping =  Reason_of_helping::create([
                    'name' => $request->name,
                    'desc' => $request->desc,
                    'imgUrl' => $imageName,
                ]);
    
                return response()->json([
                    'status' => true,
                    'message' => ' reason_of_helping Created successfully',
                    'reason_of_helping' => $_reason_of_helping
                ], 201);
     
    
                return response()->json([
                    'status' => true,
                    'message' => 'reason_of_helping Created successfully',
                    'reason_of_helping' => $_reason_of_helping
                ], 201);
           
        

        
    }

    public function update(Request $request, $id)
    {
       
        $reason_of_helping = Reason_of_helping::findOrFail($id);
            $imageName = $reason_of_helping->imgUrl; // الحفاظ على الاسم الأصلي للصورة القديمة
   if ($request->hasFile('imgUrl')) {
            $imageName = time() . '.' . $request->imgUrl->extension();
            $destinationPath = public_path('assets/auth/images');
            $request->imgUrl->move($destinationPath, $imageName);
        }
        $reason_of_helping->update([
            'name' =>  $request->input('name'),
            'desc' =>  $request->input('desc'),
            'imgUrl' => $imageName,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'تم تحديث سبب المساعدة بنجاح',
            'reason_of_helping' => $reason_of_helping
        ], 200);
    }
    
}    