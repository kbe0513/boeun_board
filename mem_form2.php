<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<script>
function check_id()
{
	window.open("check_id.php?id="+document.mem_form2.id.value,"IDcheck","lett=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
}

/*function check_nick()
{
	window.open("check_nick.php?nick="+document.mem_form2.nick.value,"NICKcheck","left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
}*/

function check_input()
{
	if(!document.mem_form2.id.value)
	{
		alert("아이디를 입력하세요");
		document.mem_form2.id.focus();
		return;
	}

	if(!document.mem_form2.passwd.value)
	{
		alert("비밀번호를 입력하세요");
		document.mem_form2.passwd.focus();
		return;
	}

	if(!document.mem_form2.passwd_confirm.value)
	{
		alert("비밀번호 확인을 입력하세요");
		document.mem_form2.passwd_confirm.focus();
		return;
	}

	if(!document.mem_form2.phone.value||!document.mem_form2.phone3.value)
	{
		alert("휴대폰 번호를 입력하세요");
		document.member_form.phone2.focus();
		return;
	}

	if(document.mem_form2.passwd.value != document.mem_form2.passwd_confirm.value)
	{
		alert("비밀번호가 일치하지 않습니다. \n 다시 입력해주세요.");
		document.mem_form2.passwd.focus();
		document.mem_form2.passwd.select();
		return;
	}

	document.mem_form2.submit();
}

function reset_form()
{
	document.mem_form2.id.value="";
	document.mem_form2.passwd.value="";
	document.mem_form2.passwd_confirm.value="";
	document.mem_form2.email.value="";
	document.mem_form2.phone1.value="010";
	document.mem_form2.phone2.value="";
	document.mem_form2.phone3.value="";
	document.mem_form2.address.value="";
	document.mem_form2.hobby.value="선택";
	document.mem_form2.intro.value="";
}

</script>
</head>

<body>
<h2>회원가입</h2>
<form name="mem_form2" method="post" action="mem_print.php" enctype="multipart/form-data">
<table border="1" width="640" cellspacing="1" cellpadding="4">
<tr>
	<td align="right">아이디</td>
	<td><input type="text" size="15" maxlength="12" name="id" ><a href="#" onclick="check_id()">중복확인</a></td>
</tr>
<tr>
	<td align="right">이름</td>
	<td><input type="text" size="15" maxlength="12" name="name"></td>
</tr>
<tr>
	<td align="right">비밀번호</td>
	<td><input type="password" size="15" maxlength="12" name="passwd" ></td>
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
		<a href="#" onclick="check_input()">저장</a>
		<a href="#" onclick="reset_form()">취소</a>
	</td>
</tr>
</table>
</form>
</body>
</html>