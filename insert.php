<meta charset="euc-kr">

<?
$id						= $_POST[id];
$pass					=$_POST[pass];
$pass_confirm=$_POST[pass_confirm];
$name				=$_POST[name];
$nick					=$_POST[nick];
$hp						=$_POST[hp1]."-".$_POST[hp2]."-".$_POST[hp3];
$email				=$_POST[email1]."@".$_POST[email2];

//$hp=$hp1."-".$hp2."-".$hp3;
//$email=$email1."@".$email2;

$regist_day=date("Y-m-d (H:i)");
$ip=$REMOTE_ADDR;

include "dbconn.php";

$sql="select * from member where id='$id'";
$result=mysql_query($sql, $connect);
$exist_id=mysql_num_rows($result);

if($exist_id)
{
	echo ("
	<script>
		window.alert('해당아이디가 존재합니다.')
		history.go(-1)
	</script>
	");
	exit;
}
else
{
	$sql="INSERT INTO member VALUES('$id', '$pass', '$name', '$nick', '$hp', '$email', '$regist_day', 9)";
	echo $sql;
	mysql_query($sql, $connect);
}



mysql_close();
/*echo ("
	<script>
		location.href='login_form.php';
	</script>
	");*/
?>
