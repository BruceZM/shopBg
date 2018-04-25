<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {     
       
//      $show = $request->show??10;
		if($request->show){
			$show = $request->show;
		}else{
			$show = 10;
		}
        if($request->keywords){
            $res = Article::where('intro','like','%'.$request->keywords.'%')
                ->orWhere('details','like','%'.$request->keywords.'%')
                ->paginate($show); 
        }else{
            $res = Article::paginate($show);
        }
     
        
        return view('/Admin/Article/article',['res'=>$res,'show'=>$show,'keywords'=>$request->keywords]);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $all = CatesController::getCates(0);

        return view('/Admin/Article/add',['all'=>$all]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
       $data = $request->except('_token');
       $data['uid'] = $request->session()->get('uid');
       
        if($request->hasFile('picture')){
            if($request->file('picture')->isValid()){
                $ext = $request->file('picture')->getClientOriginalExtension();
                
                $picName = date('YmdHis').'.'.$ext;
                $nowTime = date('Y-m-d H:i:s',time());
                $data['picture'] = $picName; 
               
                $res = $request->file('picture')->move(\Config::get('app.uploads'),$picName);
                $info = Article::insert($data);
            }else{
                return redirect('/Article/create')->with('error','图片上传错误');
            }            
           
        }else{
            return redirect('/Article/create')->with('error','图片上传错误');            
        }

       if($info){
            echo "<script>alert('上传成功！');window.location.href='/Article'</script>";
        }else{
            echo "<script>alert('上传失败！');window.location.href='/Article/create'</script>";

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
        echo "表单展示页面".$id;
        return view('/Admin/edit');
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
        $res = DB::select('select * from article where id=?',[$id]);
        $res = $res[0];
        return view('/Admin/Article/edit',['res'=>$res]);
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
        $title = $request->title;
       $author = $request->author;
       $intro = $request->intro;
       $details = $request->details;
       $keywords = $request->keywords;
      
        if($request->hasFile('picture')){

            $ext = $request->file('picture')->getClientOriginalExtension();
            
            $picName = date('YmdHis').'.'.$ext;

            $res = $request->file('picture')->move('./images/',$picName);           
			$re = DB::table('article')
            	->where('id', $id)
				->update(['title'=>$title,'author'=>$author,'intro'=>$intro,'details'=>$details,'picture'=>$picName,'keywords'=>$keywords,]);
				
        }else{
        	
        	$re = DB::table('article')
            	->where('id', $id)
				->update(['title'=>$title,'author'=>$author,'intro'=>$intro,'details'=>$details,'keywords'=>$keywords,]);
             
        }

       if($re){
            echo "<script>alert('修改成功！');window.location.href='/Article'</script>";
        }else{
            echo "<script>alert('修改失败！');window.location.href='".$_SERVER['HTTP_REFERER']."'</script>";

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
    
		$res = DB::table('article')->where('id','=', $id)->delete();
		if($res){
            echo "<script>alert('删除成功！');window.location.href='/Article'</script>";
        }else{
            echo "<script>alert('删除失败！');window.location.href='".$_SERVER['HTTP_REFERER']."'</script>";

        }
    }
}
