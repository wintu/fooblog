<?php

namespace App\Http\Controllers;

use Request;
use Session;

class AuthController extends Controller
{
    public function login() {
      $pass_hash = '329435e5e66be809a656af105f42401e';

      $username = Request::input('user');
      $password = Request::input('password');

      if ($username == 'admin' && md5($password) == $pass_hash){
        Session::put('username', $username);
        return redirect('admin/');
      } else {
        Session::flash('flash_message', 'ログインID/PASSWORDが正しくありません。');
        return back();
      }
    }

    public function logout() {
      Session::flush();
      return redirect('/');
    }

}
