<?php

namespace App\Http\Controllers\AuthControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function userProfile() {
        return view('admin.auth.user_register');
    }

    public function customRegistration(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();
        return $check = $this->create($data);
    }

    public function create(array $data) {
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

       return back()
        ->with('success','User başarıyla oluşturuldu');
    }

    public function customLogin(Request $request) {
        $request->validate(
            [
              'email' => 'required',
              'password' => 'required'
            ],
            [
            'email.required' => 'bu alan boş bırakılamaz',
            'password.required' => 'bu alan boş bırakılamaz'
            ]
        );
        $emailAndPassword = $request->only('email','password');
        if(Auth::attempt($emailAndPassword)){
            return redirect()->route('admin-anasayfa')->with('success','Giriş başarılı');
        } else {
            return back()
            ->with('error','kullanıcı adı veya şifre hatalı');
        }

    }

    public function profil(){
        $result = [];
        $result['profil'] = User::profil_data(Auth::user()->id);
        return view('admin.auth.user_profil')->with('result',$result);
    }

    public function profil_update(Request $request) {

        return User::profil_update($request,Auth::user()->id);
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
