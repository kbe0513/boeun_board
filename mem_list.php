<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
$connect=mysql_connect("localhost","kbe0513","qh05dms13");
$db_con=mysql_select_db("kbe0513",$connect);

$sql="select * from mem;";
$result=mysql_query($sql,$connect);

$number=1;
?>

<h2>ȸ�� ���</h2>
<table width="1000" border="1" cellpadding="10">
<tr align="center">
	<td bgcolor="#cccccc">��ȣ</td>
	<td bgcolor="#cccccc">���̵�</td>
	<td bgcolor="#cccccc">�̸�</td>
	<td bgcolor="#cccccc">��й�ȣ</td>
	<td bgcolor="#cccccc">�̸���</td>
	<td bgcolor="#cccccc">����</td>
	<td bgcolor="#cccccc">�޴�����ȣ</td>
	<td bgcolor="#cccccc">�ּ�</td>
	<td bgcolor="#cccccc">���</td>
	<td bgcolor="#cccccc">�Ұ�</td>
</tr>

<?
while($row=mysql_fetch_array($result))
{
	echo ("
		<tr>
			<td>$number</td>
			<td>$row[id]</td>
			<td>$row[name]</td>
			<td>$row[passwd]</td>
			<td>$row[email]</td>
			<td>$row[gender]</td>
			<td>$row[phone]</td>
			<td>$row[address]</td>
			<td>$row[hobby]</td>
			<td>$row[intro]</td>
		</tr>
	");
	$number++;
}

mysql_close();
?>
</table>