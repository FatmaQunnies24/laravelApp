<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Causes;
use Illuminate\Support\Facades\Storage; 

class CausesController extends Controller
{
    
    protected $Controller;
    public function __construct()
    {
        $this->Controller = app(Controller::class);
    }
    public function index()
    {
        $_Causes = Causes::take(6)->get();
    
        return response()->json([
            'status' => true,
            'Causes' => $_Causes
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
            $_Causes =  Causes::create([
                'name' => $request->name,
                'raised' => $request->raised,
                'goal' => $request->goal,
                'pre' => $request->pre,
                'imgUrl' => $imageUrl,
                'smallDisc' => $request->smallDisc,
                'desc' => $request->desc,
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'Causes Created successfully',
                'Causes' => $_Causes
            ], 201);
       
    }

    public function update(Request $request, $id)
{
    $cause = Causes::find($id);
    
    if (!$cause) {
        return response()->json([
            'status' => false,
            'message' => 'Cause not found'
        ], 404);
    }

    $cause->name = $request->name ?? $cause->name;
    $cause->raised = $request->raised ?? $cause->raised;
    $cause->goal = $request->goal ?? $cause->goal;
    $cause->pre = $request->pre ?? $cause->pre;
    $cause->smallDisc = $request->smallDisc ?? $cause->smallDisc;
    $cause->desc = $request->desc ?? $cause->desc;

    $imageUrl = $cause->imgUrl;
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
    

        $cause->imgUrl = $imageUrl;
   
    $cause->save();

    return response()->json([
        'status' => true,
        'message' => 'Cause updated successfully',
        'Cause' => $cause
    ], 200);
}
public function destroy($id)
{
    $cause = Causes::find($id);

    if (!$cause) {
        return response()->json([
            'status' => false,
            'message' => 'Cause not found'
        ], 404);
    }

    $imageUrl = $cause->imgUrl;
    $publicId = $this->extractPublicId($imageUrl);

    $cloudinaryResponse = cloudinary()->destroy($publicId);

    if ($cloudinaryResponse['result'] !== 'ok') {
        return response()->json([
            'status' => false,
            'message' => 'Failed to delete image from Cloudinary'
        ], 500);
    }
    $cause->delete();

    return response()->json([
        'status' => true,
        'message' => 'Cause deleted successfully'
    ], 200);
}




private function extractPublicId($imageUrl)
{ $parts = explode('/', $imageUrl);
    $fileNameWithExtension = end($parts);
    $publicId = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    return $publicId;
}

}
