<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>

<body>
	<form name="write_form" method="post" action="write_db.php" >
	<center>
		<h1>게시글 작성</h1>
		<table>
			<tr>
				<td>글쓴이</td>
				<td><input type="text" name="name" size="10" maxlength="10"></td>
			</tr>
			<tr>
				<td>e-mail</td>
				<td><input type="text" name="email" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td>암호</td>
				<td><input type="password" name="passwd" size="4" maxlength="4"></td>
			</tr>
			<tr>
				<td>제목</td>
				<td><input type="text" name="title" size="20" maxlength="15"></td>
			</tr>
			<tr>
				<td>내용</td>
				<td><textarea name="contents" cols="60" rows="20"></textarea></td>
			</tr>
		</table>
		<table>
			<tr>
				<td>
					<input type="submit" value="확인">
					<input type="reset" value="다시작성">
				</td>
				<td><a href="list.php">목록으로</a></td>
			</tr>
		</table>
	</center>
</body>
</html>