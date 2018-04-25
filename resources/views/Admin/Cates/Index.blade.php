@extends('layouts.table')

@section('active3')
active
@endsection

@section('content')
<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper">
    <form action="{{url('/Cates')}}" method="get">
	    <div id="DataTables_Table_1_length" class="dataTables_length">
	        <label>Show 
	            <select size="1" name="show" aria-controls="DataTables_Table_1">
	                <option value="5" >5</option>
	                <option value="10" >10</option>
	                <option value="15" >15</option>
	                <option value="20" >20</option>
	            </select> entries
	        </label>
	    </div>
        <label>Search: <input type="text" aria-controls="DataTables_Table_1" name="keywords"></label>
        <button type="submit" class="btn btn-primary">Blue</button>
    </form>  
     
	<table class="mws-datatable-fn mws-table dataTable">  
        <thead>
            <tr>
            	<th class="sorting_asc">分类编号</th>
                <th class="sorting">分类姓名</th>
                <th class="sorting">父级ID</th>
                <th class="sorting">路径信息</th>               
                <th class="sorting">操作</th>
            </tr>
        </thead>
        @foreach ($all as $v)
			<tr>
				<td>{{$v['id']}}</td>
				<td>{{$v['name']}}</td>
				<td>{{($v['pid'])}}</td>
				<td>{{$v['path']}}</td>														
				<td>
                    <a href="Cates/edit/{{$v['id']}}">修改</a>            
                    <a href="Cates/del/{{$v['id']}}">删除</a>            
                </td>														
			</tr>
		@endforeach
        
   </table>
</div>
@endsection