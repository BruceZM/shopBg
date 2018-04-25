@extends('layouts.table')
@section('active2')
active
@endsection
@section('content')
	<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
	<div class="mws-panel grid_8">
	
    	<div class="mws-panel-header">
        	<span>Inline Form</span>
        </div>
        <div class="mws-panel-body no-padding">
        
       
        	<form class="mws-form" action="/Article" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">标题</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="title">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">作者</label>
         				<div class="mws-form-item">
        					<input type="text" class="medium" name="author">
        				</div>
        			</div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">所属类</label>
                        <div class="mws-form-item">
                            <select class="large" name="cateid" class="small" class="small">
                                
                                <option value="0">请选择</option>
                                @foreach($all as $k=>$v)
                                    <option value="{{$v['id']}}" >{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div>    
                    </div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">文章简介</label>
        				<div class="mws-form-item">
        					<textarea name="intro" class="large" cols="30" rows="5"></textarea>
        				</div>
        			</div>


                    <div class="mws-form-row">  
                        <label class="mws-form-label">文章详情</label>
                        <div class="mws-form-item">
                            <textarea id="editor" type="text/plain" style="width:100%;height:300px;" name="details"></textarea>
                        </div>
                    </div>     			       				        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">图片</label>
        				<input type="file" name="picture" value="" id="">
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">关键字</label>
        				<input type="text" name="keywords" value="" class="medium">
        			</div>       			
        		</div>
        		<div class="mws-button-row">
        			<input type="submit" value="Submit" class="btn btn-danger">
        			<input type="reset" value="Reset" class="btn ">
        		</div>
        	</form>
        </div>    	
    </div>
    <script>
        var ue = UE.getEditor('editor');
    </script>
@endsection
