<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Reason_of_helping;
use Illuminate\Support\Facades\Storage;

class CharifitController extends Controller
{
    protected $Controller;
    public function __construct()
    {
        $this->Controller = app(Controller::class);
    }

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

        $uploadResponse = $this->Controller->uploadImage($request);

        if (!$uploadResponse->getData()->status) {
            return response()->json([
                'status' => false,
                'message' => 'Image upload failed'
            ], 500);
        }

        $imageUrl = $uploadResponse->getData()->url;

        $_reason_of_helping = Reason_of_helping::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'imgUrl' => $imageUrl,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'reason_of_helping Created successfully',
            'reason_of_helping' => $_reason_of_helping
        ], 201);
        

        
    }

    public function update(Request $request, $id)
    {
        $reason_of_helping = Reason_of_helping::findOrFail($id);
        $imageUrl = $reason_of_helping->imgUrl;
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
        
        $reason_of_helping->update([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'imgUrl' => $imageUrl,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'update successfully',
            'reason_of_helping' => $reason_of_helping
        ], 200);
    }
    

    public function destroy($id)
{
    $reason_of_helping = Reason_of_helping::findOrFail($id);

        $imageUrl = $reason_of_helping->imgUrl;
        $publicId = $this->extractPublicId($imageUrl);

        $cloudinaryResponse = cloudinary()->destroy($publicId);

        if ($cloudinaryResponse['result'] !== 'ok') {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete image from Cloudinary'
            ], 500);
        }

        $reason_of_helping->delete();

        return response()->json([
            'status' => true,
            'message' => 'deleted successfully'
        ], 200);



}    

private function extractPublicId($imageUrl)
{ $parts = explode('/', $imageUrl);
    $fileNameWithExtension = end($parts);
    $publicId = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    return $publicId;
}


}