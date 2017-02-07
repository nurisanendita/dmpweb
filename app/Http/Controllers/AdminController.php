<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function authenticate(Request $request) {
      if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
        return redirect('agenda_index');
      }
      return redirect()->back();
  }
}
