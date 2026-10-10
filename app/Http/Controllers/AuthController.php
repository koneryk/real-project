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
            'email'=>'required|email',
            'password'=>'required'

        ]);

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = User::where('email',$email)->first();
        if(Hash::check($password, $user->password)){
            Auth::attempt(['email' => $email, 'password' => $password]);
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('login.form');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
