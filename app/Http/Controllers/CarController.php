<?php

namespace App\Http\Controllers;

use App\Car;
use App\Sp;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $shangpin = Sp::all();
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.gouwuche',compact('gw','shang','pin'));
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //执行添加购物车
    public function show($id)
    {
          if(!empty(User::findOrFail(session('id'))->car->where('shangpin_id',$id)->first())){
                    return redirect('/gouwuche')->with('success','此商品已存在');
                }else{
                    $car = new Car;
                    $sp = Sp::findOrFail($id);
                    $car->title = $sp->title;
                    $car->image = $sp->image;
                    $car->cheng = $sp->cheng;
                    $car->money = $sp->money;
                    $car->shangpin_id = $sp->id;
                    $car->user_id = session('id'); 
                    
                    if ($car ->save()) {
                        
                        return redirect('/gouwuche')->with('success','成功');
                        }else{
                            return redirect('/gouwuche')->with('success','成功');
                        }
             
                }
        // dd($car);
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
        
    }


    public function che($id)
    {
        $shan = Car::findOrFail($id);
        if($shan->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
