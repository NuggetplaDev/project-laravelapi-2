<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/dashboard'); // ส่งข้อมูลไปยัง view ที่ชื่อ dashboard.blade.php
    }
}