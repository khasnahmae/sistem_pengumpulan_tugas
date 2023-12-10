<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // method untuk menampilkan laman Login
    public function showLoginForm(){
    return view('login.login');
    }
    // method untuk proses Login
    public function login(Request $request) {
    }
    // method untuk proses Logout
    public function logout(){
    }
    // method untuk menampilkan laman Register
    public function showRegistrationForm(){
    return view('login.register');
    }
    // method untuk proses Register
    public function register(Request $request){
    }
    // method untuk menampilkan laman Register Sukses
    public function registrationSuccess(){
    }
    
}
