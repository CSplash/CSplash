<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * View Profile
     *
     * @return Response
     */
    public function index()
    {
        $auth = Auth::user();
        return view('profile', ['auth' => $auth ]);
    }

}
