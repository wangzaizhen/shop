<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="{{url('admin/update')}}" method="get">
	<input type="hidden" name="id" value="{{$res->id}}">
	@csrf
	<table>
		<tr>
			<td>学生</td>
			<td><input type="text" name="username" value="{{$res->username}}"></td>
		</tr>
		<tr>
			<td>年龄</td>
			<td><input type="text" name="age" value="{{$res->age}}"></td>
		</tr>
		<tr>
			<td><input type="submit" value="修改"></td>
			<td></td>
		</tr>
	</table>
</form>
	
</body>
</html>