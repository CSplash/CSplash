<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class SearchController extends Controller
{
    /**
     * Searching for memo.
     *
     * @return $memos
     */
    public function index(Request $request)
    {
        $key = $request->key;

        if(!empty($key)){
            $posts = Memo::where('title', 'like', "%{$key}%")->orderBy('created_at', 'desc')->get();
        }else{
            $posts = Memo::orderBy('created_at', 'desc')->get();
            }
        return view('search', compact('posts'));
    }
}