<?php

namespace App\Http\Controllers;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class VolunteerController extends Controller
{
    
    protected $Controller;
    public function __construct()
    {
        $this->Controller = app(Controller::class);
    }
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
        $uploadResponse = $this->Controller->uploadImage($request);

        if (!$uploadResponse->getData()->status) {
            return response()->json([
                'status' => false,
                'message' => 'Image upload failed'
            ], 500);
        }
        $imageUrl = $uploadResponse->getData()->url;
            $_Volunteer =  Volunteer::create([
                'name' => $request->name,
                'info' => $request->info,
                'imgUrl' => $imageUrl,
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
      
    }

    public function update(Request $request, $id)
{
    $_Volunteer = Volunteer::find($id);

    if (!$_Volunteer) {
        return response()->json([
            'status' => false,
            'message' => 'Volunteer not found'
        ], 404);
    }

    $imageUrl = $_Volunteer->imgUrl;
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
    
        $_Volunteer->imgUrl = $imageUrl;
    
    $_Volunteer->update([
        'name' => $request->name,
        'info' => $request->info,
        'facebook' => $request->facebook,
        'pinterest' => $request->pinterest,
        'linkedin' => $request->linkedin,
        'twitter' => $request->twitter,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Volunteer updated successfully',
        'Volunteer' => $_Volunteer
    ], 200);
}


public function destroy($id)
{
    $_Volunteer = Volunteer::find($id);

    if (!$_Volunteer) {
        return response()->json([
            'status' => false,
            'message' => 'Volunteer not found'
        ], 404);
    }
    $imageUrl = $_Volunteer->imgUrl;
    $publicId = $this->extractPublicId($imageUrl);

    $cloudinaryResponse = cloudinary()->destroy($publicId);

    if ($cloudinaryResponse['result'] !== 'ok') {
        return response()->json([
            'status' => false,
            'message' => 'Failed to delete image from Cloudinary'
        ], 500);
    }
    $_Volunteer->delete();

    return response()->json([
        'status' => true,
        'message' => 'Volunteer deleted successfully'
    ], 200);
}



private function extractPublicId($imageUrl)
{ $parts = explode('/', $imageUrl);
    $fileNameWithExtension = end($parts);
    $publicId = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    return $publicId;
}

}
