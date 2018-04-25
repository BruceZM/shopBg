<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Cates;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CatesController extends Controller
{
    public static function getCates(){
        $res = Cates::select(DB::raw(" *,concat(path,',',id) as npath"))->orderBy('npath')->get()->toArray();
        foreach ($res as $k => $v) {
            $num = substr_count($v['path'], ',');
            $res[$k]['name'] = str_repeat('|---', $num).$v['name'];
        }
        
        return $res;
    }

    public static function getCatePid($pid){

        $data = [];
        $res = Cates::where('pid',$pid)->get()->toArray();

        foreach ($res as $key => $value) {
           //var_dump($value);
           $value['sub'] = self::getCatePid($value['id']);
           $data[] = $value;
           
        }
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
       
       $all = self::getCates();
        return view('Admin/Cates/Index',['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        $all = self::getCates();
       
        return view('Admin/Cates/add',['all'=>$all]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postInsert(Request $request)
    {
        $this->validate($request,[
                'name'=>'required',
            ],[
                'name.required'=>'请输入类名',
            ]);
       $pid = $request->pid;
       $data = $request->except('_token');
       if($pid == 0){
            
            $data['path'] = 0;
            $res = Cates::insert($data);
            if($res){
                return redirect('Cates/index')->with('success',$data['name'].'父类添加成功');
            }else{
                return back()->with('error',$data['name'].'父类添加失败');
            }
       }else{
            $path = Cates::where('id','=',$request->pid)->first()->toArray()['path'];
            $path = $path.','.$request->pid;
            $data['path'] = $path;
            $res = Cates::insert($data);
            if($res){
                return redirect('Cates/index')->with('success',$data['name'].'子类添加成功');
            }else{
                return back()->with('error',$data['name'].'子类添加失败');
            }
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDel($id)
    {
        $res = Cates::where('pid',$id)->get()->toArray();
       if(!empty($res)){
            return back()->with('error','此类下有子类，无法删除.');
       }else{
            $inf = Cates::where('id',$id)->delete();
            if($inf){
                return back()->with('success','删除成功！');
            }else{
                return back()->with('error','删除失败！');               
            }

       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $res = Cates::where('id',$id)->first()->toArray();

        return view('Admin/Cates/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request)
    {
        $id = $request->id;
        $data = $request->except('_token','id');
        $res = Cates::where('id',$id)->update($data);
        if($res){
            return redirect('Cates/index')->with('success','修改成功！');
        }else{
            return back()->with('error','修改失败！');               
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
    }
}
