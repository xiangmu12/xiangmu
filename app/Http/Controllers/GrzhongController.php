<?php

namespace App\Http\Controllers;

use App\Car;
use App\Ding;
use App\Hb;
use App\Huo;
use App\Sp;
use App\Tag;
use App\User;
use App\WoMen;
use App\Youlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrzhongController extends Controller
{
    //个人中心
    public function geren()
    {
        $huobans = Hb::all(); 
        $gw = Car::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $shangpin = Sp::get();
        $youlians = Youlian::all();
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.grzx.index',compact('shangpin','shang','pin','women','tags','gw','youlians','huobans'));
    }

    //我的订单
    public function gerendingdan()
    {
        $huobans = Hb::all(); 
        $gw = Car::all();
        $tags = Tag::all();
        $women = WoMen::all();
    	$di = Ding::where('user_id','=',session('id'))->where('title','like', '%'.request()->keywords.'%')->paginate(8);
        $shangpin = Sp::get();
        $gw = Car::all();
        $youlians = Youlian::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.grzx.gerendd',compact('shangpin','shang','pin','di','tags','women','gw','youlians','huobans'));
    }

     public function grdingdan(Request $request)
    {
        $huobans = Hb::all(); 
    	$ding = new Ding;
        $huo = Huo::findOrFail($request->shouhuo_id);
        $sp = Sp::findOrFail($request->spid);
        $ding->title = $sp->title;
        $ding->image = $sp->image;
        $ding->cheng = $sp->cheng;
        $ding->money = $sp->money;
        $ding->zhifu = $request->zhifu;
        $ding->title = $sp->title;
        $ding->kuaidi = $request->kuaidi;
        $ding->user_id = session('id');
        $ding->shangpin_id = $sp->spid;
        $ding->shouhuo_id = $request->shouhuo_id;
         if($ding->save()){
            return redirect('/gerendingdan')->with('success','订单提交成功');
        }else{
            return back()->with('error','订单提交失败');
        }

    }
    //收货地址
    public function shouhuodizhi()
    {
        $huobans = Hb::all(); 
        $gw = Car::all();
        $huo = Huo::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $di = Ding::where('user_id','=',session('id'))->where('title','like', '%'.request()->keywords.'%')->paginate(8);
        $shangpin = Sp::get();
        $youlians = Youlian::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
       return view('home.grzx.shouhuodizhi',compact('shangpin','shang','pin','di','tags','women','huo','gw','youlians','huobans'));
    }

    public function shouhuodz(Request $request)
    {
        $gw = Car::all();
        $ding = new Ding;
        $huo = Huo::findOrFail($request->shouhuo_id);
        $sp = Sp::findOrFail($request->spid);
        $ding->title = $sp->title;
        $ding->image = $sp->image;
        $ding->cheng = $sp->cheng;
        $ding->money = $sp->money;
        $ding->zhifu = $request->zhifu;
        $ding->title = $sp->title;
        $ding->kuaidi = $request->kuaidi;
        $ding->user_id = session('id');
        $ding->shangpin_id = $sp->spid;
        $ding->shouhuo_id = $request->shouhuo_id;
         if($ding->save()){
            return redirect('/shouhuodizhi')->with('success','订单提交成功');
        }else{
            return back()->with('error','订单提交失败');
        }
    }

    public function test()
    {
        $huo = Huo::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $di = Ding::where('user_id','=',session('id'))->where('title','like', '%'.request()->keywords.'%')->paginate(8);
        $shangpin = Sp::get();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
       return view('wel',compact('shangpin','shang','pin','di','tags','women','huo'));
    }

    //前台用户中心修改
    public function wode()
    {   
        $huobans = Hb::all(); 
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $women = WoMen::all();
        $tags = Tag::all();
        $user = User::find(\Session::get('id'));
        $gw = Car::all();
        $youlians = Youlian::all();
        return view('home.wod.yonh',compact('pin','gw','shang','women','tags','user','youlians','huobans'));
    }

     //前台用户中心修改
    public function wodegai(Request $request)
    {
          $user = User::first();


      if (!$user) {
          $user = new User;
      }


        $user->username = $request->username; 
        $user->email = $request->email;
        $user->name = $request->name;
        $user->sfenz= $request->sfenz;
        $user->phone = $request->phone;
        $user->oradmin = $request->oradmin;
        $user->pic = $request->pic;
       

        
        if($user -> save()){
            return redirect('/wode')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

}
