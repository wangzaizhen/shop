<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>id</td>
			<td>学生</td>
			<td>年龄</td>
			<td>操作</td>
		</tr>
		@if($data)
		@foreach($data as $v)
		<tr>
				<td>{{$v->id}}</td>
				<td>{{$v->username}}</td>
				<td>{{$v->age}}</td>
				<td>
					<a href="{{url('admin/del',['id'=>$v->id])}}">删除</a>
					<a href="{{url('admin/edit',['id'=>$v->id])}}">修改</a>
				</td>
		</tr>
		@endforeach
		@endif
		
	</table>
	{{$data->links()}}
</body>
</html>