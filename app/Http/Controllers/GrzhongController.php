<?php

namespace App\Http\Controllers;

use App\Car;
use App\Ding;
use App\Huo;
use App\Sp;
use App\Tag;
use App\User;
use App\WoMen;
use App\Youlian;
use Illuminate\Http\Request;

class GrzhongController extends Controller
{
    //个人中心
    public function geren()
    {
        $tags = Tag::all();
        $women = WoMen::all();
        $shangpin = Sp::get();
        $youlians = Youlian::all();
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.grzx.index',compact('shangpin','shang','pin','women','tags','gw','youlians'));
    }

    //我的订单
    public function gerendingdan()
    {
        $tags = Tag::all();
        $women = WoMen::all();
    	$di = Ding::where('user_id','=',session('id'))->where('title','like', '%'.request()->keywords.'%')->paginate(8);
        $shangpin = Sp::get();
        $gw = Car::all();
        $youlians = Youlian::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.grzx.gerendd',compact('shangpin','shang','pin','di','tags','women','gw','youlians'));
    }

     public function grdingdan(Request $request)
    {
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
        $gw = Car::all();
        $huo = Huo::all();
        $tags = Tag::all();
        $women = WoMen::all();
        $di = Ding::where('user_id','=',session('id'))->where('title','like', '%'.request()->keywords.'%')->paginate(8);
        $shangpin = Sp::get();
        $youlians = Youlian::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
       return view('home.grzx.shouhuodizhi',compact('shangpin','shang','pin','di','tags','women','huo','gw','youlians'));
    }

    public function shouhuodz(Request $request)
    {
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
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $women = WoMen::all();
        $tags = Tag::all();
        $user = User::find(\Session::get('id'));
        $gw = Car::all();
        $youlians = Youlian::all();
        return view('home.wod.yonh',compact('pin','gw','shang','women','tags','user','youlians'));
    }

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
