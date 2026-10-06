<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showloginform(){
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'

        ]);

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = User::where('email',$email)->first();
        if(!$user || !Hash::check($password, $user->password)){
            return http_response_code(401);
        }
        return redirect()->route("main");

    }
    public function showregisterform(){
        return view('auth.register');
    }
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('login');
    }

}
