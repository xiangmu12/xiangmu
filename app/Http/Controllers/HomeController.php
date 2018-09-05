<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\User;
=======
use App\Sp;
use App\XxCate;
>>>>>>> a67ed52dfab094b9eb4ca6c45fcd3f4824ad6227
use Illuminate\Http\Request;
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
        $user = User::all();
        return view('home.index',['user'=>$user]);
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

<<<<<<< HEAD


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
=======
    public function fabu()
    {
        $xxcate = XxCate::all();
        return view('home.fabuxianzhi.index',compact('xxcate'));
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


>>>>>>> a67ed52dfab094b9eb4ca6c45fcd3f4824ad6227
}
