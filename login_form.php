<?
session_start();
?>

<!DOCTYPE HTML PUBLIC ="-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta charset="euc-kr">
</head>
<body>
<h2>로그인</h2>
<form name="member_form" method="post" action="login.php">
	<table border="0" width="600">
		<tr>
			<td align="center" width="20%">아이디</td>
			<td width="30%"><input type="text" name="id" class="login_input" size="20"></td>
		</tr>
		<tr>
			<td align="center">비밀번호</td>
			<td><input type="password" name="pass" class="login_input" size="20"></td>
			<td><a href="login.php">로그인</a></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><a href="member_form.php">회원가입하기</td>
		</tr>
	</table>
</form>
</body>
</html>