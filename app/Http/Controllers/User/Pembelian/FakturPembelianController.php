<?php

namespace App\Http\Controllers\User\Pembelian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FakturPembelianController extends Controller
{
    public function index(Request $request)
    {
        $sessionCompany = $request->session()->get('company');
        return view('user.fitur-pembelian.faktur-pembelian', compact('sessionCompany'));
    }
}