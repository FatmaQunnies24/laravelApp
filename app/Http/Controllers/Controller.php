<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnError($errNum, $msg)
    {
        return response()->json([
            'status' => false,
            'errNum' => $errNum,
            'msg' => $msg
        ]);
    }

    public function returnSuccessMessage($msg = "", $errNum = "S000")
    {
        return [
            'status' => true,
            'errNum' => $errNum,
            'msg' => $msg
        ];
    }

    public function returnData($key, $value, $msg = "")
    {
        return response()->json([
            'status' => true,
            'errNum' => "S000",
            'msg' => $msg,
            $key => $value
        ]);
    }

    public function returnValidationError($code, $validator)
    {
        return $this->returnError($code, $validator->errors()->first());
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function uploadImage(Request $request)
    {
        try {
            if (!$request->hasFile('file')) {
                return $this->returnError(202, 'File is required');
            }

            $photo = $request->file('file');

            $uploadResult = cloudinary()->upload($photo->getRealPath())->getSecurePath();

            return $this->returnData('url', $uploadResult, 'Image uploaded successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }




    private function extractPublicId($imageUrl)
{ $parts = explode('/', $imageUrl);
    $fileNameWithExtension = end($parts);
    $publicId = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    return $publicId;
}

}
