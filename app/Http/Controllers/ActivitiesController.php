<?php

namespace App\Http\Controllers;
use App\Models\Activities;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
 
     public function index()
     {
         $_activities = Activities::take(1)->get();
     
         return response()->json([
             'status' => true,
             'Activities' => $_activities
         ], 200);
     }
 
   
  
     public function store(Request $request)
     {
 
             // if($request->has('image')){
                //  $imageName = time().'.'.$request->image->extension();
                //  Storage::disk('public')->put($imageName, file_get_contents($request->image));
     
                 $_Activities =  Activities::create([
                     'name' => $request->name,
                     'videoUrl' => $request->videoUrl,
                     'desc' => $request->desc,
                    
                 ]);
     
                 return response()->json([
                     'status' => true,
                     'message' => ' Activities Created successfully',
                     'Activities' => $_Activities
                 ], 201);
      
     
                 return response()->json([
                     'status' => true,
                     'message' => 'Activities Created successfully',
                     'Activities' => $_Activities
                 ], 201);
            
         
 
         
     }
     public function update(Request $request, $id)
     {
     
 
         $activity = Activities::findOrFail($id);
 
         $activity->name = $request->input('name');
         $activity->videoUrl = $request->input('videoUrl');
         $activity->desc = $request->input('desc');
         $activity->save();
//  return    $request->all();
         return response()->json([
             'status' => true,
             'message' => 'Activity updated successfully!',
             'activity' => $activity
         ], 200);
     }
 
    
    
    }