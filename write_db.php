<?
mysql_connect('localhost','kbe0513','qh05dms13') or die (mysql_error());
mysql_select_db('kbe0513');

$name=$_POST[name];
$email=$_POST[email];
$passwd=$_POST[passwd];
$title=$_POST[title];
$contents=$_POST[contents];

echo "�̸� : ".$name."<br>";
echo " �̸��� : ".$email."<br>";
echo "��й�ȣ : ".$passwd."<br>";
echo "���� : ".$title."<br>";
echo"���� : ".$contents."<br>";

$query = "INSERT INTO write VALUES ('$name','$email','$passwd','$title','$contents')";
$result = mysql_query($query);

//echo ("<script>");
//echo ("alert('�ۼ� �Ϸ�.');");
//echo ("</script>");
?>