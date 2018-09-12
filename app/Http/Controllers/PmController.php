<?php

namespace App\Http\Controllers;

use App\Car;
use App\Pl;
use App\Pm;
use App\Pml;
use App\Sp;
use App\Tag;
use App\WoMen;
use App\Youlian;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //读取数据库 获取用户数据
        $paimais = Pm::orderBy('id','desc')
            ->where('intro','like','%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.paimai.index',compact('paimais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.paimai.create');
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
        $paimai = new Pm; 
        $paimai -> intro = $request->intro;
        $paimai -> cheng = $request->cheng;
        $paimai -> money = $request->money;
        $paimai -> jmoney = $request->jmoney;
        $paimai -> opentime = date('Y-m-d H:i',strtotime($request->opentime));
        $paimai -> overtime = date('Y-m-d H:i',strtotime($request->overtime));
        $paimai -> user_id = $request->user_id;
        $paimai -> xxcate_id = $request->xxcate_id;

        if($request->hasFile('image')){
             $paimai->image ='/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($paimai -> save()){
            return redirect('/paimai')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
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
        $paimai = Pm::findOrFail($id);
        $paimais = Pm::all();

        return view('admin.paimai.edit', compact('paimai','paimais'));
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
        $paimai = Pm::findOrFail($id);
        $paimai -> intro = $request->intro;
        $paimai -> cheng = $request->cheng;
        $paimai -> money = $request->money;
        $paimai -> jmoney = $request->jmoney;
        $paimai -> opentime = date('Y-m-d H:i',strtotime($request->opentime));
        $paimai -> overtime = date('Y-m-d H:i',strtotime($request->overtime));
        $paimai -> user_id = $request->user_id;
        $paimai -> xxcate_id = $request->xxcate_id;

        //文件上传
        //检测是否有文件上传

        if ($request->hasFile('image')) {
            $paimai->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }else{
            echo 111;
        }

        //插入
        if($paimai -> save()){
            return redirect('/paimai')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
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
        $paimai = Pm::findOrFail($id);
        if($paimai -> delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    //拍卖添加
    public function pm()
    {
        $gw = Car::all();
        $women = WoMen::all();
        $tags = Tag::all();
        $youlians = Youlian::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.fbpm',compact('gw','shang','pin','women','tags','youlians'));
    }

    //执行拍卖
    public function mai(Request $request)
    {
        $mai = new Pm;
        $mai -> intro = $request->intro;
        $mai -> cheng = $request->cheng;
        $mai -> money = $request->money;
        $mai -> jmoney = $request->jmoney;
        $mai -> opentime = $request->opentime;
        $mai -> overtime = $request->overtime;


        // dd($mai);
        if($request->hasFile('image')){
             $mai->image ='/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($mai -> save()){
            return redirect('/pmhc')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
        // return '2345';
    }

    //拍卖会场
    public function pmhc()
    {
        $gw = Car::all();
        $shangpin = Sp::all();
        $women = WoMen::all();
        $tags = Tag::all();
        $mai = Pm::all();
        $youlians = Youlian::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        return view('home.pmhc',compact('gw','shangpin','shang','pin','women','tags','mai','youlians'));
    }

    //拍卖详情页
    public function xq($id)
    {
        $gw = Car::all();
        $pm = Pm::get();
        $shangpin = Sp::all();
        $women = WoMen::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $tags = Tag::all();
        $shangpinss = Pm::findOrFail($id);
        $pingluns = $shangpinss->pingluns()->get();
        $pmliebiao = Pml::all();
        $youlians = Youlian::all();
        $pmlone = DB::table('pmliebiao')->where('shangpin_id',$id)->orderBy('id','desc')->first();
        // dd($shangpinss);
        // $endmoney = array_column(array($pmliebiao), 'endmoney');
        // dd($endmoney);
        return view('home.xq.pmxq',compact('gw','shang','shangpin','pin','women','shangpinss','tags','pm','pingluns','pmliebiao','pmlone','youlians'));
    }

    //竞拍
    public function jingpai(Request $request)
    {
        // dd($request->endmoney);
        $gw = Car::all();
        $jingpai = new Pml;
        $jingpai->uuser_id = session('id');
        $jingpai->shangpin_id = $request->shangpinid; 
        $jingpai->endmoney = $request->endmoney;
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $pm = Pm::all();



        if($jingpai -> save()){
             return redirect('/pmhc')->with('success','添加成功');
           
        }else{
            return back()->with('error','添加失败');
        }  
    }

    //我的拍卖
    public function wdpm()
    {
        $gw = Car::all();
        $shang = Sp::where('orlogin','0')->where('user_id',session('id'))->count();
        $pin = Sp::where('orlogin','1')->where('user_id',session('id'))->count();
        $pmliebiao = Pml::get();
        $paimai = Pm::all();
        // $lie = DB::table('pmliebiao')->pluck('endmoney');
        // $pmliebiao = Pml::where('uuser_id',session('id'))->get();
        // dd($lie);
        // dd($paimai);
        return view('home.wdpm',compact('gw','shang','pin','pmliebiao','paimai'));
    }
}
