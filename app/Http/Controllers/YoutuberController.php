<?php

namespace App\Http\Controllers;

use App\Anchor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YoutuberController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:youtuber');
        $this->middleware('auth');
    }

    public function anchor()
    {
        $anchors = Anchor::all();
        return view('youtuber.anchors',compact('anchors'));
    }

    public function deleteAnchor($id)
    {
        $anchor = Anchor::where('id', $id)->where('user_id', Auth::id())->first();
        $anchor->delete();
        return back();
    }

    public function anchorEdit($id)
    {
        $anchor = Anchor::where('id', $id)->where('user_id', Auth::id())->first();
        return view('youtuber.editAnchor',compact('anchor'));
    }

    public function anchorEditPost(Request $request, $id)
    {
        $anchor = Anchor::where('id',$id)->where('user_id', Auth::id())->first();
        $anchor->name = $request['name'];
        $anchor->description = $request['description'];

        if($request->hasFile('thumbnail1')){
            $thumbnail = $request->file('thumbnail1');
            $fileName = $thumbnail->getClientOriginalName();             //取得上傳檔案的原始名稱
            // $fileExtension = $thumbnail->getClientOriginalExtension();   //取得上傳檔案的副檔名
            $thumbnail->move('product-images', $fileName);              //移動上傳檔案
            $anchor->thumbnail1 = 'product-images/' . $fileName;        //移動上傳檔案
        }

        if($request->hasFile('thumbnail2')){
            $thumbnail = $request->file('thumbnail2');
            $fileName = $thumbnail->getClientOriginalName();             //取得上傳檔案的原始名稱
            // $fileExtension = $thumbnail->getClientOriginalExtension();   //取得上傳檔案的副檔名
            $thumbnail->move('product-images', $fileName);              //移動上傳檔案
            $anchor->thumbnail2 = 'product-images/' . $fileName;        //移動上傳檔案
        }

        $anchor->save();

        return back()->with('success', "Anchor updated successfully");
    }
}
