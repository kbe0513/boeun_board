<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>

<body>
<h2>회원가입</h2>
<form name="mem_form" method="post" action="mem_print.php" enctype="multipart/form-data">
<table border="1" width="640" cellspacing="1" cellpadding="4">
<tr>
	<td align="right">아이디</td>
	<td><input type="text" size="15" maxlength="12" name="id" value="geust"></td>
</tr>
<tr>
	<td align="right">이름</td>
	<td><input type="text" size="15" maxlength="12" name="name"></td>
</tr>
<tr>
	<td align="right">비밀번호</td>
	<td><input type="password" size="15" maxlength="12" name="passwd" value="1234"></td>
</tr>
<tr>
	<td align="right">비밀번호확인</td>
	<td><input type="password" size="15" maxlength="12" name="passwd_confirm" ></td>
</tr>
<tr>
	<td align="right">이메일</td>
	<td><input type="text" size="30" maxlength="30" name="email" ></td>
</tr>
<tr>
	<td align="right">성별</td>
	<td>
		<input type="radio" name="gender" value="M" checked>남
		<input type="radio" name="gender" value="F">여
	</td>
</tr>
<tr>
	<td align="right">휴대전화</td>
	<td>
		<select name="phone1">
			<option>선택</option>
			<option value="010">010</option>
			<option value="011">011</option>
			<option value="017">017</option>
		</select>
		<input type="text" size="4" name="phone2" maxlength="4">-
		<input type="text" size="4" name="phone3" maxlength="4">
	</td>
</tr>
<tr>
	<td align="right">주소</td>
	<td><input type="text" size="50" name="address"></td>
</tr>
<tr>
	<td align="right">취미</td>
	<td>
		<select name="hobby">
			<option>선택</option>
			<option value="영화감상">영화감상</option>
			<option value="독서">독서</option>
			<option value="쇼핑">쇼핑</option>
			<option value="운동">운동</option>
		</select>
	</td>
</tr>
<tr>
	<td align="right">자기소개</td>
	<td><textarea name="intro" row="5" cols="60"></textarea></td>
</tr>
<tr>
	<td align="center">파일첨부</td>
	<td><input type="file" name="upload_file"></td>
</tr>
</table>
<br>
<table border="0" width="640">
<tr>
	<td align="center">
		<input type="submit" value="확인">
		<input type="reset" value="다시작성">
	</td>
</tr>
</table>
</form>
</body>
</html>