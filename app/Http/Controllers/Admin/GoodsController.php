<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Goods;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
       	//      $show = $request->show??10;
		if($request->show){
			$show = $request->show;
		}else{
			$show = 10;
		}
        if($request->keywords){
            $all = Goods::where('gName','like','%'.$request->keywords.'%')
                ->orWhere('gDesc','like','%'.$request->keywords.'%')
                ->paginate($show); 
        }else{
            $all = Goods::paginate($show);
        }
		
		$c = [];				
		
		foreach ($all as $k=>$v){			
			$cid = $v['cate_id'];
			$cid = DB::select("select name from cates where id={$cid}");						
			$c[] = $cid[0];			
		}     	     	
        return view('/Admin/Goods/index',['all'=>$all,'show'=>$show,'keywords'=>$request->keywords,'c'=>$c]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        // 
       $all = CatesController::getCates(0);

        return view('/Admin/Goods/add',['all'=>$all]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAdd(Request $request)
    {
               
       $data = $request->except('_token');      
      
        if($request->hasFile('gImg')){
        	
            if($request->file('gImg')->isValid()){
                $ext = $request->file('gImg')->getClientOriginalExtension();
                
                $picName = date('YmdHis').'.'.$ext;
                $nowTime = date('Y-m-d H:i:s',time());
                $data['gImg'] = $picName; 
               
                $res = $request->file('gImg')->move(\Config::get('app.goods'),$picName);
				
                $info = Goods::insert($data);
            }else{
                return redirect('/Goods/create')->with('error','图片上传错误');
            }            
           
        }else{
        	
            return redirect('/Goods/create')->with('error','图片上传错误');            
        }

       if($info){
            echo "<script>alert('上传成功！');window.location.href='/Goods'</script>";
        }else{
            echo "<script>alert('上传失败！');window.location.href='/Goods/create'</script>";

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
