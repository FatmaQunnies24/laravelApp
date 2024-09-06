<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{ 
    
    public function index()
    {
        $_About = About::take(1)->get();
    
        return response()->json([
            'status' => true,
            'About' => $_About
        ], 200);
    }

    public function store(Request $request)
    {
        $_About = About::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'pinterest' => $request->pinterest,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
        ]);
    
        return response()->json([
            'status' => true,
            'message' => 'About Created successfully',
            'About' => $_About
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $activity = About::findOrFail($id);

        $activity->phone = $request->input('phone');
        $activity->email = $request->input('email');
        $activity->facebook = $request->input('facebook');
        $activity->pinterest = $request->input('pinterest');
        $activity->linkedin = $request->input('linkedin');
        $activity->twitter = $request->input('twitter');
        $activity->save();

        return response()->json([
            'status' => true,
            'message' => 'Activity updated successfully!',
            'activity' => $activity
        ], 200);
    }
}