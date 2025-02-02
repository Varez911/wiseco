<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $sessionCompany = $request->session()->get('company');
        return view('user.dashboard', compact('sessionCompany'));
    }
}
