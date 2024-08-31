<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;
class BlogController extends Controller
{
    public function index()
    {
      
            $_Blog = Blog::take(3)->get();
        
            return response()->json([
                'status' => true,
                'Blog' => $_Blog
            ], 200);
        }
    
        public function store(Request $request)
        {
            if($request->hasFile('imgUrl')) {
                $image = $request->file('imgUrl');
                $imageName = time().'.'.$image->extension();
                Storage::disk('public')->put($imageName, file_get_contents($image));
                $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
    
                $_Blog =  Blog::create([
                    'name' => $request->name,
                    'date' => $formattedDate,
                    'imgUrl' => $imageName,
                    'style' => $request->style,
                    'disc' =>$request->disc,
                   
                    
                ]);
            
                return response()->json([
                    'status' => true,
                    'message' => 'Blog Created successfully',
                    'Blog' => $_Blog
                ], 201);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'No image uploaded'
                ], 400);
            }
        }


        public function show($id)
        {
            $_Blog = Blog::find($id);
        
            if ($_Blog) {
                return response()->json([
                    'status' => true,
                    'Blog' => $_Blog
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Blog not found'
                ], 404);
            }
                
}

    }
    