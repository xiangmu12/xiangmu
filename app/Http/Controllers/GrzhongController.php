<?php

namespace App\Http\Controllers;

use App\Ding;
use App\Huo;
use App\Sp;
use Illuminate\Http\Request;

class GrzhongController extends Controller
{
    //个人中心
    public function geren()
    {
        
         $shangpin = Sp::get();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
       return view('home.grzx.index',compact('shangpin','shang','pin'));
    }

    //我的订单
    public function gerendingdan()
    {

    	$di = Ding::where('user_id','=',session('id'))->where('title','like', '%'.request()->keywords.'%')->paginate(8);
         $shangpin = Sp::get();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
       return view('home.grzx.gerendd',compact('shangpin','shang','pin','di'));
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
}
