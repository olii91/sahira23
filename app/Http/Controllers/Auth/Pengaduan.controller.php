<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaduan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class pengaduancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = pengaduan::all();
        return view('pengaduan.index')->with('pengaduan',$pengaduan);
    }
}