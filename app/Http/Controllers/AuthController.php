<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Pest\Laravel\json;

class AuthController extends Controller
{
    public function showloginform(){
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'login'=>'required|min:6',
            'password'=>'required',
        ]);

        $login = $request['login'];
        $password = $request['password'];

        $user = User::where('login',$login)->first();
        if(Hash::check($password, $user->password)){
            Auth::attempt(['login' => $login, 'password' => $password]);
            $request->session()->regenerate();
            if ($request->user()->role == 'admin') {
                return redirect()->intended('/admin');

            }
            else{
                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Неверные учётные данные.',
        ])->onlyInput('email');

    }
    public function test()
    {
        return view('test');
    }
    public function showregisterform(){
        return view('auth.register');
    }
    public function register(Request $request){
        $data = $request->validate([
            'login'=>'required|min:6',
            'email'=>'required|email',
            'password'=>'required',
            'FIO'=>'required',
            'telephone'=>'required',
        ]);
        $user = new User();
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->FIO = $data['FIO'];
        $user->telephone = $data['telephone'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('login.form');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }

}
