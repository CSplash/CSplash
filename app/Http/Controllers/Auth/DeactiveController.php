<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DeactiveController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function showDeactiveForm()
  {
    return view('auth/deactive');
  }

  public function deactive()
  {
    $user = User::find(Auth::id());
    $user->delete();
    return redirect()->route('login.index');
  }
}
