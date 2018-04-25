<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑文章</title>
</head>
<body>
	<center>
		<h2>帖子管理程序</h2>		
		<hr/>
		<h3>查看帖子</h3>
		<form action="/Article/{{$res['id']}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<table border='1' width='800' cellpadding="15" cellspacing="0">
			<tr>
				<td>文章标题: </td>
				<td><input type="text" name="title" value="{{$res['title']}}" id=""></td>
			</tr>
			<tr>
				<td>作者:</td>
				<td><input type="text" name="author" value="{{$res['author']}}" id=""></td>
			</tr>
			<tr>
				<td>文章简介:</td>
				<td><textarea name="intro" id="" cols="30" rows="5" value="">{{$res['intro']}}</textarea></td>
			</tr>
			<tr>
				<td>文章详情: </td>
				<td><textarea name="details" id="" cols="60" rows="10" value="">{{$res['details']}}</textarea></td>
			</tr>
			<tr>
				<td>图片: </td>
				<td><input type="file" name="picture" value="{{$res['picture']}}" id=""></td>
			</tr>
			<tr>
				<td>关键词: </td>
				<td><input type="text" name="keywords" value="{{$res['keywords']}}" id=""></td>
			</tr>
			<tr>
				<td colspan="2" align='center'>
					<input type="submit" value="添加">		
				  	<input type="reset" value="重置">
				</td>
			</tr>
				  
		</table>
		</form>
	</center>
</body>
</html>