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
		alert("���̵� �Է��ϼ���");
		document.mem_form2.id.focus();
		return;
	}

	if(!document.mem_form2.passwd.value)
	{
		alert("��й�ȣ�� �Է��ϼ���");
		document.mem_form2.passwd.focus();
		return;
	}

	if(!document.mem_form2.passwd_confirm.value)
	{
		alert("��й�ȣ Ȯ���� �Է��ϼ���");
		document.mem_form2.passwd_confirm.focus();
		return;
	}

	if(!document.mem_form2.phone.value||!document.mem_form2.phone3.value)
	{
		alert("�޴��� ��ȣ�� �Է��ϼ���");
		document.member_form.phone2.focus();
		return;
	}

	if(document.mem_form2.passwd.value != document.mem_form2.passwd_confirm.value)
	{
		alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�. \n �ٽ� �Է����ּ���.");
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
	document.mem_form2.hobby.value="����";
	document.mem_form2.intro.value="";
}

</script>
</head>

<body>
<h2>ȸ������</h2>
<form name="mem_form2" method="post" action="mem_print.php" enctype="multipart/form-data">
<table border="1" width="640" cellspacing="1" cellpadding="4">
<tr>
	<td align="right">���̵�</td>
	<td><input type="text" size="15" maxlength="12" name="id" ><a href="#" onclick="check_id()">�ߺ�Ȯ��</a></td>
</tr>
<tr>
	<td align="right">�̸�</td>
	<td><input type="text" size="15" maxlength="12" name="name"></td>
</tr>
<tr>
	<td align="right">��й�ȣ</td>
	<td><input type="password" size="15" maxlength="12" name="passwd" ></td>
</tr>
<tr>
	<td align="right">��й�ȣȮ��</td>
	<td><input type="password" size="15" maxlength="12" name="passwd_confirm" ></td>
</tr>
<tr>
	<td align="right">�̸���</td>
	<td><input type="text" size="30" maxlength="30" name="email" ></td>
</tr>
<tr>
	<td align="right">����</td>
	<td>
		<input type="radio" name="gender" value="M" checked>��
		<input type="radio" name="gender" value="F">��
	</td>
</tr>
<tr>
	<td align="right">�޴���ȭ</td>
	<td>
		<select name="phone1">
			<option>����</option>
			<option value="010">010</option>
			<option value="011">011</option>
			<option value="017">017</option>
		</select>
		<input type="text" size="4" name="phone2" maxlength="4">-
		<input type="text" size="4" name="phone3" maxlength="4">
	</td>
</tr>
<tr>
	<td align="right">�ּ�</td>
	<td><input type="text" size="50" name="address"></td>
</tr>
<tr>
	<td align="right">���</td>
	<td>
		<select name="hobby">
			<option>����</option>
			<option value="��ȭ����">��ȭ����</option>
			<option value="����">����</option>
			<option value="����">����</option>
			<option value="�">�</option>
		</select>
	</td>
</tr>
<tr>
	<td align="right">�ڱ�Ұ�</td>
	<td><textarea name="intro" row="5" cols="60"></textarea></td>
</tr>
<tr>
	<td align="center">����÷��</td>
	<td><input type="file" name="upload_file"></td>
</tr>
</table>
<br>
<table border="0" width="640">
<tr>
	<td align="center">
		<a href="#" onclick="check_input()">����</a>
		<a href="#" onclick="reset_form()">���</a>
	</td>
</tr>
</table>
</form>
</body>
</html>