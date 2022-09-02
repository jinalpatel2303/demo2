<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\InfiniteScroll;
 
class ProductController extends Controller
{ 
public function InfiniteScrollDataList(Request $request)
    {
        $posts =  InfiniteScroll::paginate(5);
        if($request->ajax()){
            $view = view('data',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('autoLoadexample',compact('posts'));
    }
}