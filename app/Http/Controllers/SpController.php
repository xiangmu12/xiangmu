<?php

namespace App\Http\Controllers;

use App\Sp;

use Illuminate\Http\Request;


class SpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //3
          //读取数据库 获取用户数据
        $shangpins = Sp::orderBy('id','desc')
            ->where('intro','like', '%'.request()->keywords.'%')
            ->paginate(3);
        //解析模板显示用户数据
        return view('admin.shangpin.index',compact('shangpins'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shangpin.create');
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

          //2添加
        $shangpins = new Sp;
        // $shangpins -> imgae = $request->imgae;
        $shangpins -> intro = $request->intro;
        $shangpins -> cheng = $request->cheng;
        $shangpins -> money = $request->money;
        $shangpins -> quyu = $request->quyu;

        //文件上传
        //检测是否有文件上传
            
        if ($request->hasFile('image')) {
            $shangpins->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        

        if ($shangpins -> save()) {
            return redirect('shangpin')->with('success','添加成功');
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
        //4显示
        $shangpins = Sp::find($id);
        return view('admin.shangpin.edit',compact('shangpins'));
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
          //5修改
        $shangpins = Sp::find($id);

        // $shangpins -> imgae = $request->imgae;
        $shangpins -> intro = $request->intro;
        $shangpins -> cheng = $request->cheng;
        $shangpins -> money = $request->money;
        $shangpins -> quyu = $request->quyu;
        $shangpins -> image = $request->image;
        //文件上传
        //检测是否有文件上传
         
        
         if ($request->hasFile('image')) {
            $shangpins->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        

        if ($shangpins -> save()) {
            return redirect('shangpin')->with('success','修改成功');
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
         $shangpins = Sp::find($id);
        
        // dd($id);
         if ($shangpins->delete()) {
            
            return back()->with('error','删除成功');
        }else{
            return redirect('shangpin')->with('success','删除失败');
        }
    }
}
