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
		alert("���̵� �Է��ϼ���");
		frm.id.focus();
		return;
	}

	if(!frm.pass.value)
	{
		alert("��й�ȣ�� �Է��ϼ���");
		frm.pass.focus();
		return;
	}

	if(!frm.pass_confirm.value)
	{
		alert("��й�ȣ Ȯ���� �Է��ϼ���");
		frm.pass_confirm.focus();
		return;
	}
	
	if(!frm.name.value)
	{
		alert("�̸��� �Է��ϼ���");
		frm.name.focus();
		return;
	}

	if(!frm.nick.value)
	{
		alert("�г����� �Է��ϼ���");
		frm.nick.focus();
		return;
	}

	if(!frm.hp2.value||!frm.hp3.value)
	{
		alert("�޴��� ��ȣ�� �Է��ϼ���");
		frm.nick.focus();
		return;
	}

	if(frm.pass.value != frm.pass_confirm.value)
	{
		alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�. \n �ٽ� �Է����ּ���.");
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
		alert("���̵� �Է��ϼ���");
		frm.id.focus();
		return false;
	}

	if(!frm.pass.value)
	{
		alert("��й�ȣ�� �Է��ϼ���");
		frm.pass.focus();
		return false;
	}

	if(!frm.pass_confirm.value)
	{
		alert("��й�ȣ Ȯ���� �Է��ϼ���");
		frm.pass_confirm.focus();
		return false;
	}
	
	if(!frm.name.value)
	{
		alert("�̸��� �Է��ϼ���");
		frm.name.focus();
		return false;
	}

	if(!frm.nick.value)
	{
		alert("�г����� �Է��ϼ���");
		frm.nick.focus();
		return false;
	}

	if(!frm.hp2.value||!frm.hp3.value)
	{
		alert("�޴��� ��ȣ�� �Է��ϼ���");
		frm.nick.focus();
		return false;
	}

	if(frm.pass.value != frm.pass_confirm.value)
	{
		alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�. \n �ٽ� �Է����ּ���.");
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
<h2>ȸ������</h2>
<form name="member_form" method="post" action="insert.php" onSubmit="return check_input2(this)">
	<table border="1" width="600">
		<tr>
			<td>* ���̵�</td>
			<td><input type="text" name="id"><a href="#" onclick="check_id()">�ߺ�Ȯ��</a></td>
		</tr>
		<tr>
			<td>* ��й�ȣ</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>* ��й�ȣ Ȯ��</td>
			<td><input type="password" name="pass_confirm"></td>
		</tr>
		<tr>
			<td>* �̸�</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>* �г���</td>
			<td><input type="text" name="nick"><a href="#" onclick="check_nick()">�ߺ�Ȯ��</a></td>
		</tr>
		<tr>
			<td>* �޴���</td>
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
			<td>&nbsp;&nbsp;&nbsp;�̸���</td>
			<td><input type="text" id="email1" name="email1">@<input  type="text" name="email2"></td>
		</tr>
		<tr>
		<td colspan="2">* �� �ʼ� �Է��׸��Դϴ�.</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
			<input type="submit" value="�����ϱ�">
			<a href="#" onclick="check_input()">�����ϱ�&nbsp;&nbsp;</a>
			<a href="#" onclick="reset_form()">����ϱ�</a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>