<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>

<body>
	<form name="write_form" method="post" action="write_db.php" >
	<center>
		<h1>�Խñ� �ۼ�</h1>
		<table>
			<tr>
				<td>�۾���</td>
				<td><input type="text" name="name" size="10" maxlength="10"></td>
			</tr>
			<tr>
				<td>e-mail</td>
				<td><input type="text" name="email" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td>��ȣ</td>
				<td><input type="password" name="passwd" size="4" maxlength="4"></td>
			</tr>
			<tr>
				<td>����</td>
				<td><input type="text" name="title" size="20" maxlength="15"></td>
			</tr>
			<tr>
				<td>����</td>
				<td><textarea name="contents" cols="60" rows="20"></textarea></td>
			</tr>
		</table>
		<table>
			<tr>
				<td>
					<input type="submit" value="Ȯ��">
					<input type="reset" value="�ٽ��ۼ�">
				</td>
				<td><a href="list.php">�������</a></td>
			</tr>
		</table>
	</center>
</body>
</html>