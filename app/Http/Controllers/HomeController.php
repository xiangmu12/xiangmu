<?php

namespace App\Http\Controllers;

use App\Car;
use App\DCate;
use App\Sp;
use App\User;
use App\XCate;
use App\XxCate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
        $gw = Car::all();
        $user = User::all();
        $users = Session()->get('id');
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.index',compact('dcate','xcate','xxcate','shangpin','gw','user','users','shang','pin'));
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


    //我的闲置
    public function list()
    {
        // dd($shangpin);die;
        $shangpin = Sp::get();
        $gw = Car::all();
        $users = Session()->get('id');
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        // dd($res);die;
        return view('home.wdxz.collection',compact('shang','gw','pin','shangpin','users'));
    }

    public function xiajia($id)
    {
        $shangpin = Sp::findOrFail($id);

        if($shangpin->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }


    public function sp($id)
    {
        $users = Session()->get('id');
        $gw = Car::all();
        $shangpin = Sp::where('id',$id)->get();
        $shangpins = Sp::where('xxcate_id',$shangpin[0]['xxcate_id'])->get();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.shangpinone',compact('shangpin','shangpins','gw','shang','pin','users'));
    }

    public function cateall(Request $request)
    {

        if(!empty($request->xxcate_id)){
             $shangpin = Sp::where('xxcate_id', $request->xxcate_id)->orderBy('id','desc')->get();
        }
        if(empty($request->xxcate_id)){
           $shangpin = Sp::all(); 
        }
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        $xxcate = Xxcate::all();
        return view('home.cateall',compact('shangpin','xxcate','shang','pin'));;
    }




    public function jiang()
    {   

        $sps = Sp::all();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.jiang',compact('sps','shang','pin'));

    }



     //登陆
    public function login()
    {
        return view('home.user.login');

    }

    //登录操作
    public function dologin(Request $request)
    {
        //获取用户的数据
        $user = User::where('username',$request->username)->first();
        // dd($user);
        
        if(!$user){
            return back()->with('error','登录失败');
        }

        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id]);
            return redirect('/')->with('success','登录成功');
        }else{
            return back()->with('error','登录失败');
        }
    }


    //退出登入
    public function logout(Request $request)
    {
        //
        $request->session()->flush();

        return redirect('/login')->with('success','退出成功');
    }


    //用户注册
    public function zhuce()
    {
       
    }

    public function fabu()
    {
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        $xxcate = XxCate::all();
        return view('home.fabuxianzhi.index',compact('xxcate','shang','pin'));
    }

    public function fabuchuli(Request $request)
    {
        $shangpins = new Sp;
        
        $shangpins -> title = $request->title;
        $shangpins -> intro = $request->intro;
        $shangpins -> cheng = $request->cheng;
        $shangpins -> xxcate_id = $request ->xxcate_id;
        $shangpins -> money = $request->money;
        $shangpins -> province = $request->province;
        $shangpins -> city = $request->city;
        $shangpins -> area = $request->area;

        if ($request->hasFile('image')) {
            $shangpins->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

         if ($shangpins -> save()) {
            return redirect('/')->with('error','添加成功');
        }else{
            return back()->with('success','添加失败');
        }
        
    }
}
