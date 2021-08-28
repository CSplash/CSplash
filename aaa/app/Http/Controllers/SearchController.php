<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class SearchController extends Controller
{
    /**
     * Searching for memo.
     *
     * @return $searches
     */
    public function index(Request $request)
    {
        $key = $request->key;

        if(!empty($key)){
            $searches = Memo::where('title', 'like', "%{$key}%")->orderBy('created_at', 'desc')->get();
        }else{
            $searches = Memo::orderBy('created_at', 'desc')->get();
            }
        return view('search', compact('searches'));
    }

    /*public function select(Request $request)
    {
        $selected = Memo::find($request->id);
        session()->put('select', $selected);

        return redirect()->route('search.select');
    }*/
}