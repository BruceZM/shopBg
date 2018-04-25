@extends('layouts.table')

@section('content')
	
	<div class="mws-panel grid_8">
	
    	<div class="mws-panel-header">
        	<span>Inline Form</span>
        </div>
        <div class="mws-panel-body no-padding">
        
        @if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        	<form class="mws-form" action="/Cates/insert" method="post">
        	{{csrf_field()}}
        		<div class="mws-form-inline">        			
        			<div class="mws-form-row">
        				<label>分类名称</label>
                        <div class="mws-form-row clearfix">
                             <input type="text" name="name" > 
                        </div>
                       
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">选择父类</label>
        				<div class="mws-form-item clearfix">
    						<select class="large" name="pid">

                                <option value="0">请选择父类</option>
                                @foreach($all as $k=>$v)
                                    <option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach
                            </select>
        						
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
@endsection