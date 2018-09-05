<?php

namespace App\Http\Controllers;

use App\DCate;
use App\Sp;
use App\XCate;
use App\XxCate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dcate = DCate::all();
        $xcate = XCate::all();
        $xxcate = XxCate::all();
        $shangpin = Sp::all();
        
        return view('home.index',compact('dcate','xcate','xxcate','shangpin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sp($id)
    {
        $shangpin = Sp::where('id',$id)->get();
        $shangpins = Sp::where('xxcate_id',$shangpin[0]['xxcate_id'])->get();

        return view('home.shangpinone',compact('shangpin','shangpins'));
    }

    public function cateall(Request $request)
    {

        if(!empty($request->xxcate_id)){
             $shangpin = Sp::where('xxcate_id', $request->xxcate_id)->orderBy('id','desc')->get();
        }
        if(empty($request->xxcate_id)){
           $shangpin = Sp::all(); 
        }
        
        $xxcate = Xxcate::all();
        return view('home.cateall',compact('shangpin','xxcate'));;
    }

}
