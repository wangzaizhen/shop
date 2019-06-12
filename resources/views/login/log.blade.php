<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="{{url('/login/logdo')}}" method="post"></form>
	<table>
		<tr>
			<td>账号</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="登录"></td>
		</tr>
	</table>
</body>
</html>