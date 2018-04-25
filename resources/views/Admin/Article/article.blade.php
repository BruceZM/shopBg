@extends('layouts.table')


@section('active2')
active
@endsection

@section('content')
<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper">	
	<form action="{{url('/Article')}}" method="get">         
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
	<table class="mws-table">
        <thead>
            <tr>
            	<th>ID</th>
				<th>标题</th>
				<th>作者</th>
				<th>图片</th>
				<th>关键字</th>
				<th>点击量</th>
				<th>所属分类</th>
				<th>时间</th>
				<th>操作</th>
				
            </tr>
        </thead>
        @foreach ($res as $v)
			<tr>
				<td>{{$v['id']}}</td>
				<td>{{str_limit($v['title'],10)}}</td>
				<td>{{$v['author']}}</td>
				<td><img width="60" src="/images/{{$v['picture']}}"></td>
				<td>{{$v['keywords']}}</td>
				<td>{{$v['click_num']}}</td>
				<td>{{$v['cateid']}}</td>
				<td>{{$v['insert_at']}}</td>
				<td>
					<a href="/Article/{{$v['id']}}/edit">编辑</a>
					<form action="/Article/{{$v['id']}}" method="post">
						{{method_field('DELETE')}}
						{{csrf_field()}}
						<button type="submit">删除</button>						
					</form>
				</td>										
			</tr>
		@endforeach
   </table>
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
   <div class="dataTables_paginate paging_full_numbers" id="pages">
        {!! $res->appends(['show'=>$show,'keywords'=>$keywords])->render() !!}

   </div>
@endsection