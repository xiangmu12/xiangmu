<?php

namespace App\Http\Controllers;

use App\Jubao;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin');
    }

    public function inde()
    {
    	$jubao = Jubao::get();
    	return view('admin.jubao.inde',compact('jubao'));
    }
}
