@extends('layouts.table')

@section('active4')
active
@endsection

@section('content')
<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper">
    <form action="{{url('/Goods')}}" >
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
        <label>Search: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$keywords}}"></label>
        <button type="submit" class="btn btn-primary">Blue</button>
    </form>  
     
	<table class="mws-datatable-fn mws-table dataTable">  
        <thead>
            <tr>
            	<th class="sorting_asc">商品名称</th>
                <th class="sorting">价格</th>
                <th class="sorting">图片</th>
                <th class="sorting">库存</th>               
                <th class="sorting">是否上架</th>
                <th class="sorting">是否热销</th>
                <th class="sorting">是否精品</th>
                <th class="sorting">是否新品</th>
                <th class="sorting">所属分类</th>
                <th class="sorting">销售量</th>
                <th class="sorting">浏览量</th>
                <th class="sorting">尺寸</th>
                <th class="sorting">颜色</th>
                <th class="sorting">操作</th>
            </tr>
        </thead>      
        @foreach ($all as $k=>$v)
			<tr>
				<td>{{$v['gName']}}</td>
				<td>{{$v['gPrice']}}</td>
				<td><img src="/images/{{($v['gImg'])}}" style="width: 40px;"></td>
				<td>{{$v['gStock']}}</td>														
				<td>{{$v['isSale']==1?'是':'否'}}</td>														
				<td>{{$v['isHot']==1?'是':'否'}}</td>														
				<td>{{$v['isBest']==1?'是':'否'}}</td>														
				<td>{{$v['isNew']==1?'是':'否'}}</td>														
				<td>{{$c[$k]['name']}}</td>																															
				<td>{{$v['saleNum']}}</td>														
				<td>{{$v['visitNum']}}</td>														
				<td>{{$v['gSize']}}</td>														
				<td>{{$v['gColor']}}</td>														
				<td>
                    <a href="##">修改</a>            
                    <a href="##">删除</a>            
                </td>														
			</tr>
		@endforeach
        
   </table>
</div>
@if (!$keywords)
   显示
   {{$all->perPage()*($all->currentPage()-1)+1}}
   到
    {{$all->perPage()*($all->currentPage()-1)+$all->count()}}
    条
     共
     {{$all->total()}}条
   @else
    共{{$all->total()}}条
   
   @endif
   <div class="dataTables_paginate paging_full_numbers" id="pages">
        {!! $all->appends(['show'=>$show,'keywords'=>$keywords])->render() !!}

   </div>
@endsection