<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {

        return view('AdminDashboard.Auth.login');
    }

    public function validateCredentials(Request $request)
    {



        $this->validate($request, [
            'admin_username' => 'required',
            'admin_password' => 'required',
        ]);
        $email = $request->admin_username;
        $password = $request->admin_password;
        $isExist = User::where('email', $email)->first();

        if ($isExist) {
            $credentials['email'] = $email;
            $credentials['password'] = $password ;
          

            if (Auth::attempt($credentials)) {
                // Authentication successful
                return redirect('/dashboard');
            } else {
                // Authentication failed
                session()->flash('message', 'Invalid credentials!');
                session()->flash('message_class', 'danger');
                return redirect('/');
            }
        } else {
            session()->flash('message', 'Wrong <strong>Email Address</strong> or your account is not <strong>Active</strong>!');
            session()->flash('message_class', 'danger');
            return redirect('/');
        }
    }
}
