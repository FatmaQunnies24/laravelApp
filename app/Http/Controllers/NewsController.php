<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;


class NewsController extends Controller
{
    
    protected $Controller;
    public function __construct()
    {
        $this->Controller = app(Controller::class);
    }
    public function index()
    {
        $_News = News::take(3)->get();
    
        return response()->json([
            'status' => true,
            'News' => $_News
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

            $_News =  News::create([
                'name' => $request->name,
                'date' => $formattedDate,
                'imgUrl' => $imageUrl,
                'desc' => $request->desc,
                
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'News Created successfully',
                'News' => $_News
            ], 201);
   
    }


    public function update(Request $request, $id)
{
    $_News = News::find($id);

    if (!$_News) {
        return response()->json([
            'status' => false,
            'message' => 'News not found'
        ], 404);
    }

    $formattedDate = Carbon::parse($request->date)->format('Y-m-d');
    $imageUrl = $_News->imgUrl;
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
        
      
        $_News->imgUrl = $imageUrl;
    

    $_News->name = $request->name;
    $_News->date = $formattedDate;
    $_News->desc = $request->desc;

    $_News->save();

    return response()->json([
        'status' => true,
        'message' => 'News updated successfully',
        'News' => $_News
    ], 200);
}
public function destroy($id)
{
    $_News = News::find($id);

    if (!$_News) {
        return response()->json([
            'status' => false,
            'message' => 'News not found'
        ], 404);
    }
    $imageUrl = $_News->imgUrl;
    $publicId = $this->extractPublicId($imageUrl);

    $cloudinaryResponse = cloudinary()->destroy($publicId);

    if ($cloudinaryResponse['result'] !== 'ok') {
        return response()->json([
            'status' => false,
            'message' => 'Failed to delete image from Cloudinary'
        ], 500);
    }

    $_News->delete();

    return response()->json([
        'status' => true,
        'message' => 'News deleted successfully'
    ], 200);
}



private function extractPublicId($imageUrl)
{ $parts = explode('/', $imageUrl);
    $fileNameWithExtension = end($parts);
    $publicId = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    return $publicId;
}

}
