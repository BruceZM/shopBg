
@extends('layouts.table')

@section('content')
	
	<div class="mws-panel grid_8">
	
    	<div class="mws-panel-header">
        	<span>Inline Form</span>
        </div>
        <div class="mws-panel-body no-padding">
        
       
        	<form class="mws-form" action="/Users" method="post">
        	{{csrf_field()}}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户名称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="nickname">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户密码</label>
         				<div class="mws-form-item">
        					<input type="text" class="medium" name="password">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">确认密码</label>
        				<div class="mws-form-item">
        					<input type="text" class="large" name="surepass">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">联系电话</label>
         				<div class="mws-form-item">
        					<input type="text" class="medium" name="phone">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户状态</label>
        				<div class="mws-form-item">
        					<select class="large" name="status">
        						<option>请选择</option>
        						<option value="1">开启</option>
        						<option value="0">关闭</option>

        					</select>
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户权限</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="checkbox" name="auth" value="1"> <label>超级管理员</label></li>
        						<li><input type="checkbox" name="auth" value="1"> <label>普通管理员</label></li>
        						<li><input type="checkbox" name="auth" value="1"> <label>普通用户</label></li>
        						
        					</ul>
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