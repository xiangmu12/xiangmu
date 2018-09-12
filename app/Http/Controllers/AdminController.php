<?php

namespace App\Http\Controllers;

use App\Car;
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

    //后台购物车
    public function gouwu()
    {
        
        $shangpins = Car::orderBy('id','desc')
            ->where('shangpin_id','like', '%'.request()->keywords.'%')
            ->paginate(5);
            // dd($shangpins);
        
            
        return view('admin.gouwu',compact('shangpins'));
    }

}
