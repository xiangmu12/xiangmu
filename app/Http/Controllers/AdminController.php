<?php

namespace App\Http\Controllers;

use App\Jubao;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$user = User::find(\Session::get('id'));
    	return view('admin',compact('user'));

    }

    public function inde()
    {
    	
    	$jubao = Jubao::get();
    	return view('admin.jubao.inde',compact('jubao'));
    }


    public function gw()
    {
        return view('admin.gw');
    }

}
