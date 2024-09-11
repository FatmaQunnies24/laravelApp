<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;
class BlogController extends Controller
{

    
    protected $Controller;
    public function __construct()
    {
        $this->Controller = app(Controller::class);
    }
    public function index()
    {
      
            $_Blog = Blog::take(4)->get();
        
            return response()->json([
                'status' => true,
                'Blog' => $_Blog
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
                $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
    
                $_Blog =  Blog::create([
                    'name' => $request->name,
                    'date' => $formattedDate,
                    'imgUrl' => $imageUrl,
                    'style' => $request->style,
                    'disc' =>$request->disc,
                   
                    
                ]);
            
                return response()->json([
                    'status' => true,
                    'message' => 'Blog Created successfully',
                    'Blog' => $_Blog
                ], 201);
           
            
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
public function update(Request $request, $id)
{
    $_Blog = Blog::find($id);

    if (!$_Blog) {
        return response()->json([
            'status' => false,
            'message' => 'Blog not found'
        ], 404);
    }

    $imageUrl = $_Blog->imgUrl;
    if ($request->hasFile('file')) {
    $uploadResponse = $this->Controller->uploadImage($request);

    if (!$uploadResponse->getData()->status) {
        return response()->json([
            'status' => false,
            'message' => 'Image upload failed'
        ], 500);
    }

    $imageUrl = $uploadResponse->getData()->url;
}
    
        $_Blog->imgUrl = $imageUrl;
 $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
    $_Blog->name = $request->name;
    $_Blog->date = $formattedDate;
    $_Blog->style = $request->style;
    $_Blog->disc = $request->disc;

    $_Blog->save();

    return response()->json([
        'status' => true,
        'message' => 'Blog updated successfully',
        'Blog' => $_Blog
    ], 200);
}

public function destroy($id)
{
    $_Blog = Blog::find($id);

    if (!$_Blog) {
        return response()->json([
            'status' => false,
            'message' => 'Blog not found'
        ], 404);
    }
    $imageUrl = $_Blog->imgUrl;
    $publicId = $this->extractPublicId($imageUrl);

    $cloudinaryResponse = cloudinary()->destroy($publicId);

    if ($cloudinaryResponse['result'] !== 'ok') {
        return response()->json([
            'status' => false,
            'message' => 'Failed to delete image from Cloudinary'
        ], 500);
    }

    $_Blog->delete();

    return response()->json([
        'status' => true,
        'message' => 'Blog deleted successfully'
    ], 200);
}




private function extractPublicId($imageUrl)
{ $parts = explode('/', $imageUrl);
    $fileNameWithExtension = end($parts);
    $publicId = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    return $publicId;
}

}