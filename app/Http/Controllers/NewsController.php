<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Carbon\Carbon;


class NewsController extends Controller
{
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
        if($request->hasFile('imgUrl')) {
            $image = $request->file('imgUrl');
            $imageName = time().'.'.$image->extension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
            $formattedDate = Carbon::parse($request->date)->format('Y-m-d');

            $_News =  News::create([
                'name' => $request->name,
                'date' => $formattedDate,
                'imgUrl' => $imageName,
                'desc' => $request->desc,
                
            ]);
        
            return response()->json([
                'status' => true,
                'message' => 'News Created successfully',
                'News' => $_News
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
    $_News = News::find($id);

    if (!$_News) {
        return response()->json([
            'status' => false,
            'message' => 'News not found'
        ], 404);
    }

    $formattedDate = Carbon::parse($request->date)->format('Y-m-d');

    if ($request->hasFile('imgUrl')) {
        if (Storage::disk('public')->exists($_News->imgUrl)) {
            Storage::disk('public')->delete($_News->imgUrl);
        }

        $image = $request->file('imgUrl');
        $imageName = time().'.'.$image->extension();
        Storage::disk('public')->put($imageName, file_get_contents($image));

        $_News->imgUrl = $imageName;
    }

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

    if (Storage::disk('public')->exists($_News->imgUrl)) {
        Storage::disk('public')->delete($_News->imgUrl);
    }

    $_News->delete();

    return response()->json([
        'status' => true,
        'message' => 'News deleted successfully'
    ], 200);
}

}
