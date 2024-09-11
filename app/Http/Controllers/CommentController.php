<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;

class CommentController extends Controller
{
    
    protected $Controller;
    public function __construct()
    {
        $this->Controller = app(Controller::class);
    }
    public function index()
    {
      
            $_Comment = Comment::take(6)->get();
        
            return response()->json([
                'status' => true,
                'Comment' => $_Comment
            ], 200);
        }
    
        public function store(Request $request)
        {
            $uploadResponse = $this->Controller->uploadImage($request);

            if (!$uploadResponse->getData()->status) {
                return response()->json([
                    'status' => false,
                    'message' => 'Image upload failed'
                ], 500);
            }
            $imageUrl = $uploadResponse->getData()->url;
                $_Comment =  Comment::create([
                    'username' => $request->username,
                    'blog_id' =>$request->blog_id,
                    'email' => $request->email,
                    'disc' =>$request->disc,
                    'website' => $request->website,
                    'imgUrl' => $imageUrl,

                   
                    
                ]);
           
    
                return response()->json([
                    'status' => true,
                    'message' => 'Comment Created successfully',
                    'Comment' => $_Comment
                ], 201);
        
        }



        public function commentBlogId($blogId)
{
    $comments = Comment::where('blog_id', $blogId)->take(5)->get();

    return response()->json([
        'status' => true,
        'comments' => $comments
    ], 200);
}

public function numComment($blogId)
{
    $commentCount = Comment::where('blog_id', $blogId)->count();

    return response()->json([
        'status' => true,
        'comment_count' => $commentCount
    ], 200);
}
   




}
    
