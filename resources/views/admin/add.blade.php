<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="{{url('admin/doadd')}}" method="post">
	@csrf
	<table>
		<tr>
			<td>学生</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>年龄</td>
			<td><input type="text" name="age"></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
			<td></td>
		</tr>
	</table>
</form>
	
</body>
</html>