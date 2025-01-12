<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    // // Handle Login Request
    // public function login(Request $request)
    // {
    //     // ตรวจสอบข้อมูลจากฟอร์ม login
    // $credentials = $request->only('username', 'password');

    // if (Auth::attempt($credentials)) {
    //     // หากเข้าสู่ระบบสำเร็จ
    //     $user = Auth::user();
    //     return redirect()->route('/dashboard');

    // } else {

    //     return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    // }
    // }
}