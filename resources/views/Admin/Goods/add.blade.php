@extends('layouts.table')
@section('active4')
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
        
       
        	<form class="mws-form" action="/Goods/add" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">商品名称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="gName">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">价格</label>
         				<div class="mws-form-item">
        					<input type="text" class="medium" name="gPrice">
        				</div>
        			</div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">图片</label>
                        <input type="file" name="gImg" value="" id="">
                    </div>


                    <div class="mws-form-row">
                        <label class="mws-form-label">所属类别</label>
                        <div class="mws-form-item">
                            <select class="large" name="cate_id" class="small" class="small">                  <option value="0">请选择</option>
                                @foreach($all as $k=>$v)
                                    <option value="{{$v['id']}}" >{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div>    
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">品牌类别</label>
                        <div class="mws-form-item">
                            <select class="large" name="cate_id" class="small" class="small">                  <option value="0">请选择</option>                               
                            </select>
                        </div>    
                    </div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">库存</label>
        				<div class="mws-form-item">
        					<input type="text" class="medium" name="gStock">
        				</div>
        			</div>                        			       				        			
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">是否上架</label>
                        是<input type="radio" name="isSale" value="1" >
        				否<input type="radio" name="isSale" value="0" >
        			</div>   
                    <div class="mws-form-row">
                        <label class="mws-form-label">是否热销</label>
                        是<input type="radio" name="isHot" value="1" >
                        否<input type="radio" name="isHot" value="0" >
                    </div> 
                    <div class="mws-form-row">
                        <label class="mws-form-label">是否新品</label>
                        是<input type="radio" name="isNew" value="1" >
                        否<input type="radio" name="isNew" value="0" >
                    </div> 
                    <div class="mws-form-row">
                        <label class="mws-form-label">销售量</label>
                        <div class="mws-form-item">
                            <input type="text" class="medium" name="saleNum">
                        </div>
                    </div> 
                    <div class="mws-form-row">
                        <label class="mws-form-label">浏览量</label>
                        <div class="mws-form-item">
                            <input type="text" class="medium" name="visitNum">
                        </div>
                    </div> 
                    <div class="mws-form-row">
                        <label class="mws-form-label">评论量</label>
                        <div class="mws-form-item">
                            <input type="text" class="medium" name="appraiseNum">
                        </div>
                    </div> 
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品简介</label>
                        <div class="mws-form-item">                            
                            <textarea id="editor" type="text/plain" style="width:100%;height:300px;" name="gDesc"></textarea>
                        </div>
                    </div>  
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品尺码</label>
                        <div class="mws-form-item">
                            36<input type="checkbox" name="gSize" value="36">
                            37<input type="checkbox" name="gSize" value="37">
                            38<input type="checkbox" name="gSize" value="38">
                            39<input type="checkbox" name="gSize" value="39">
                            40<input type="checkbox" name="gSize" value="40">
                            41<input type="checkbox" name="gSize" value="41">
                            42<input type="checkbox" name="gSize" value="42">
                            43<input type="checkbox" name="gSize" value="43">
                        </div>
                    </div> 
                    <div class="mws-form-row">
                        <label class="mws-form-label">商品颜色</label>
                        <div class="mws-form-item">
                            红<input type="checkbox" name="gColor" value="红">
                            青<input type="checkbox" name="gColor" value="青">
                            蓝<input type="checkbox" name="gColor" value="蓝">
                            白<input type="checkbox" name="gColor" value="白">
                            黑<input type="checkbox" name="gColor" value="黑">
                            黄<input type="checkbox" name="gColor" value="黄">                          
                        </div>
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
