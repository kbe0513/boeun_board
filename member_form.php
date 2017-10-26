<?
session_start();
?>
<!DOCTYPE HTML PUBLIC ="-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="euc-kr">
<script>
function check_id()
{
	window.open("check_id.php?id="+document.member_form.id.value,"IDcheck","lett=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
}

function check_nick()
{
	window.open("check_nick.php?nick="+document.member_form.nick.value,"NICKcheck","left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
}

function check_input()
{
	var frm = document.member_form;
	if(!frm.id.value)
	{
		alert("아이디를 입력하세요");
		frm.id.focus();
		return;
	}

	if(!frm.pass.value)
	{
		alert("비밀번호를 입력하세요");
		frm.pass.focus();
		return;
	}

	if(!frm.pass_confirm.value)
	{
		alert("비밀번호 확인을 입력하세요");
		frm.pass_confirm.focus();
		return;
	}
	
	if(!frm.name.value)
	{
		alert("이름을 입력하세요");
		frm.name.focus();
		return;
	}

	if(!frm.nick.value)
	{
		alert("닉네임을 입력하세요");
		frm.nick.focus();
		return;
	}

	if(!frm.hp2.value||!frm.hp3.value)
	{
		alert("휴대폰 번호를 입력하세요");
		frm.nick.focus();
		return;
	}

	if(frm.pass.value != frm.pass_confirm.value)
	{
		alert("비밀번호가 일치하지 않습니다. \n 다시 입력해주세요.");
		frm.pass.focus();
		frm.pass_confirm.value = "";
		frm.pass.select();
		return;
	}

	frm.submit();
}

function check_input2(frm)
{
	if(!frm.id.value)
	{
		alert("아이디를 입력하세요");
		frm.id.focus();
		return false;
	}

	if(!frm.pass.value)
	{
		alert("비밀번호를 입력하세요");
		frm.pass.focus();
		return false;
	}

	if(!frm.pass_confirm.value)
	{
		alert("비밀번호 확인을 입력하세요");
		frm.pass_confirm.focus();
		return false;
	}
	
	if(!frm.name.value)
	{
		alert("이름을 입력하세요");
		frm.name.focus();
		return false;
	}

	if(!frm.nick.value)
	{
		alert("닉네임을 입력하세요");
		frm.nick.focus();
		return false;
	}

	if(!frm.hp2.value||!frm.hp3.value)
	{
		alert("휴대폰 번호를 입력하세요");
		frm.nick.focus();
		return false;
	}

	if(frm.pass.value != frm.pass_confirm.value)
	{
		alert("비밀번호가 일치하지 않습니다. \n 다시 입력해주세요.");
		frm.pass.focus();
		frm.pass_confirm.value = "";
		frm.pass.select();
		return false;
	}

}

function reset_form()
{
	document.member_form.id.value="";
	document.member_form.pass.value="";
	document.member_form.pass_confirm.value="";
	document.member_form.name.value="";
	document.member_form.nick.value="";
	document.member_form.hp1.value="010";
	document.member_form.hp2.value="";
	document.member_form.hp3.value="";
	document.member_form.email1.value="";
	document.member_form.email2.value="";

	document.member_form.id.focus();
}
</script>
</head>
<body>
<h2>회원가입</h2>
<form name="member_form" method="post" action="insert.php" onSubmit="return check_input2(this)">
	<table border="1" width="600">
		<tr>
			<td>* 아이디</td>
			<td><input type="text" name="id"><a href="#" onclick="check_id()">중복확인</a></td>
		</tr>
		<tr>
			<td>* 비밀번호</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>* 비밀번호 확인</td>
			<td><input type="password" name="pass_confirm"></td>
		</tr>
		<tr>
			<td>* 이름</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>* 닉네임</td>
			<td><input type="text" name="nick"><a href="#" onclick="check_nick()">중복확인</a></td>
		</tr>
		<tr>
			<td>* 휴대폰</td>
			<td>
				<select class="hp" name="hp1">
					<option value='010'>010</option>
					<option value='011'>011</option>
					<option value='016'>016</option>
					<option value='017'>017</option>
					<option value='018'>018</option>
					<option value='019'>019</option>
				</select> 
				- <input type="text" class="hp" name="hp2">
				- <input type="text" class="hp" name="hp3">
			</td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;이메일</td>
			<td><input type="text" id="email1" name="email1">@<input  type="text" name="email2"></td>
		</tr>
		<tr>
		<td colspan="2">* 는 필수 입력항목입니다.</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
			<input type="submit" value="저장하기">
			<a href="#" onclick="check_input()">저장하기&nbsp;&nbsp;</a>
			<a href="#" onclick="reset_form()">취소하기</a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>