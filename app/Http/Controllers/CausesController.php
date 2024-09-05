<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Causes;
use Illuminate\Support\Facades\Storage; 

class CausesController extends Controller
{
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
        if($request->hasFile('imgUrl')) {
            $image = $request->file('imgUrl');
            $imageName = time().'.'.$image->extension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
        
            $_Causes =  Causes::create([
                'name' => $request->name,
                'raised' => $request->raised,
                'goal' => $request->goal,
                'pre' => $request->pre,
                'imgUrl' => $imageName,
                'smallDisc' => $request->smallDisc,
                'desc' => $request->desc,
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'Causes Created successfully',
                'Causes' => $_Causes
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No image uploaded'
            ], 400);
        }
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

    if ($request->hasFile('imgUrl')) {
        if ($cause->imgUrl) {
            Storage::disk('public')->delete($cause->imgUrl);
        }

        $image = $request->file('imgUrl');
        $imageName = time().'.'.$image->extension();
        Storage::disk('public')->put($imageName, file_get_contents($image));

        $cause->imgUrl = $imageName;
    }

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

    // if ($cause->imgUrl) {
    //     Storage::disk('public')->delete($cause->imgUrl);
    // }

    $cause->delete();

    return response()->json([
        'status' => true,
        'message' => 'Cause deleted successfully'
    ], 200);
}

}
