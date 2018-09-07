<?php

namespace App\Http\Controllers;


use App\DCate;
use App\Pl;
use App\Sp;
use App\Tag;
use App\User;
use App\Jubao;
use App\WoMen;
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
        $women = WoMen::all();
        $dcate = DCate::all();
        $xcate = XCate::all();
        $xxcate = XxCate::all();
        $shangpin = Sp::all();
        $user = User::all();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.index',compact('dcate','xcate','xxcate','shangpin','user','shang','pin','women'));
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
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        // dd($res);die;
        return view('home.wdxz.collection',compact('shang','pin','shangpin'));
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

        $shangpin = Sp::where('id',$id)->get();
        $shangpins = Sp::where('xxcate_id',$shangpin[0]['xxcate_id'])->get();

        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.shangpinone',compact('shangpin','shangpins','shang','pin'));
    }

    public function cateall(Request $request)
    {

        if(!empty($request->xxcate_id)){
             $shangpin = Sp::where('xxcate_id', $request->xxcate_id)->orderBy('id','desc')->get();
        }

        //标签跳商品
        if(!empty($request->tag_id)){
             $tag = Tag::findOrFail($request->tag_id);
             $shangpin = $tag->shangpins()->paginate(10);
        }

         if(empty($request->xxcate_id ) && empty($request->tag_id)){
           $shangpin = Sp::all(); 
        } 
        
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        $xxcate = Xxcate::all();
        $tags = Tag::all();
        return view('home.cateall',compact('shangpin','xxcate','shang','pin','tags'));
    }




    public function jiang()
    {   

        $sps = Sp::all();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.jiang',compact('sps','shang','pin'));

    }


     public function gou($id)
    {   
         return 'qwe';

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
        return view('home.user.zhuce');
    }


    public function fabu()
    {

        $shangpin = Sp::all();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        $xxcate = XxCate::all();
        $tags = Tag::all();
        return view('home.fabuxianzhi.index',compact('xxcate','shangpin','shang','pin','tags'));


        $shangpin = Sp::get();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        $xxcate = XxCate::all();
        return view('home.fabuxianzhi.index',compact('xxcate','shang','pin','shangpin'));

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

         if($shangpins -> save()){
            try{
                $res = $shangpins->tags()->sync($request->tag_id);
            }catch(\Exception $e){
                return back()->with('error','添加失败');
            }

            return redirect('/')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

    }


    


    //位置
     public function weizhi()
    {
       return view('home.weizhi');
    }



    //关于我们 
    public function gy()
    {
            //读取表中的数据
       
        $women = WoMen::first();
        return view('admin.gy',compact('women'));
    }

    /*
    保存设置  关于我们  后台
    */
    public function xiu(Request $request)
    {
 
    $women = WoMen::first();

      if (!$women) {
          $women = new WoMen;
      }
      
      $women -> dizhi = $request->dizhi;
      $women -> phone = $request->phone;
      $women -> email = $request->email;
      $women -> songtui = $request->songtui;
      $women -> question = $request->question;
      $women -> banquan = $request->banquan;
      $women -> zheng = $request->zheng;
      $women -> juphone = $request->juphone;
       if ($women -> save()) {
            return back()->with('success','设置成功');
        }else{
            return back()->with('error','设置失败');
        }

    }

    /*
        前台页面 关于我们
    */

      public function women()
    {

         $women = WoMen::all();
        $dcate = DCate::all();
        $xcate = XCate::all();
        $xxcate = XxCate::all();
        $shangpin = Sp::all();
        $user = User::all();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.women',compact('dcate','xcate','xxcate','shangpin','user','shang','pin','women'));
        
    }


    /*
    退货发货
    */
      public function tui()
    {

         $women = WoMen::all();
        $dcate = DCate::all();
        $xcate = XCate::all();
        $xxcate = XxCate::all();
        $shangpin = Sp::all();
        $user = User::all();
        $shang = Sp::where('orlogin','0')->count();
        $pin = Sp::where('orlogin','1')->count();
        return view('home.wo.tui',compact('dcate','xcate','xxcate','shangpin','user','shang','pin','women'));
        
    }
    //举报
    public function jubao($id)
    {   
      
        return view('home.jubao.report',compact('id'));

    }


    //举报中
    public function jubaologin(Request $request)
    {
        $shangpin = new Jubao;
        
        $shangpin -> shangpin_id = $request->shangpin_id;
        $shangpin -> content = $request->content;

        if ($shangpin -> save()) {
            return back()->with('error','添加成功');
        }else{
            return back()->with('success','添加失败');
        }
    }




}
