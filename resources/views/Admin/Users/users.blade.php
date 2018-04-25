@extends('layouts.table')

@section('active1')
active
@endsection

@section('content')
<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper">

	 @if (session('success'))
        <div class="mws-form-message success">
            <ol>
                <li>{{session('success')}}</li>
            </ol>           
        </div>
    @endif
    <form action="{{url('/Users')}}" method="get">
         <div id="DataTables_Table_1_length" class="dataTables_length">
            <label>Show 
                <select size="1" name="show" aria-controls="DataTables_Table_1">
                    <option value="5" {{($show==5)?'selected':''}}>5</option>
                    <option value="10" {{($show==10)?'selected':''}}>10</option>
                    <option value="15" {{($show==15)?'selected':''}}>15</option>
                    <option value="20" {{($show==20)?'selected':''}}>20</option>
                </select> entries
            </label>
        </div>
        <div class="dataTables_filter" id="DataTables_Table_0_filter">
            <label>Search: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$keywords}}"></label>
            <button type="submit" class="btn btn-primary">搜索</button>
        </div>
        
        
    </form>
   
	<table class="mws-datatable-fn mws-table dataTable">
   
        <thead>
            <tr>
            	<th class="sorting_asc">用户编号</th>
                <th class="sorting">用户姓名</th>
                <th class="sorting">登陆状态</th>
                <th class="sorting">电话</th>               
                <th class="sorting">操作<a href="/Users/create">添加用户</a></th>
            </tr>
        </thead>
        @foreach ($res as $v)
			<tr>
				<td>{{$v['id']}}</td>
				<td>{{$v['name']}}</td>
				<td>{{showStatus($v['status'])}}</td>
				<td>{{$v['phone']}}</td>														
				<td>
                    <a>修改</a>            
                    <a>删除</a>            
                </td>														
			</tr>
		@endforeach
        
   </table>
   <p style="color: white">
   </div>
   @if (!$keywords)
   显示
   {{$res->perPage()*($res->currentPage()-1)+1}}
   到
    {{$res->perPage()*($res->currentPage()-1)+$res->count()}}
    条
     共
     {{$res->total()}}条
   @else
    共{{$res->total()}}条
   
   @endif
   </p>
   <div id="pages">
        {!! $res->appends(['show'=>$show,'keywords'=>$keywords])->render() !!}

   </div>
    
    
@endsection