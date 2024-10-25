<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\warning;

class AdminController extends Controller
{
    public function login ()
    {
        return view('backend.login');
    }

    public function loginCheck (Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            return redirect('/admin/panel');
        }

        else{
            return redirect()->back();
            
        }
    }

    public function adminPanel ()
    {
        if(Auth::user()){
            return view('backend.admin.admin-panel');
        }

        else{
            return redirect('/admin/login');
            
        }
    }
}
