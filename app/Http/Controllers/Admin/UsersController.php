<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Users;
use App\Common\functions;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //判断是否提交了条件
        
//       $show = $request->show ?? 10;
		if($request->show){
			$show = $request->show;
		}else{
			$show = 10;
		}
        if($request->keywords){
            $res = Users::where('nickname','like','%'.$request->keywords.'%')->paginate($show); 
        }else{
            $res = Users::paginate($show);
        }
     
        
        return view('/Admin/Users/Users',['res'=>$res,'show'=>$show,'keywords'=>$request->keywords]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('/Admin/Users/add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'nickname'=>'required',
            'password'=>'required',
            'surepass'=>'required|same:password',
            'phone'=>'required',
            'status'=>'required',
            'auth'=>'required',
        ],[
            'nickname.required'=>'用户名不能为空！',
            'password.required'=>'请输入密码',
            'surepass.required'=>'请确认密码',
            'phone.required'=>'请确认电话',
            'surepass.same'=>'两次密码不一致',
            'status.required'=>'请确认状态',
            'auth.required'=>'请选择用户权限',

        ]);

        $data = $request->except(['_token','surepass','auth']);
        $data['password'] = Hash::make($data['password']);
        $res = Users::insert($data);
        if($res){
            return redirect('/Users')->with('success','添加成功');
        }else{
            return back();
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
}
