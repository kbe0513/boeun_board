<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
mysql_connect('localhost','kbe0513','qh05dms13') or die (mysql_error());
mysql_select_db('kbe0513');

$id=$_POST[id];
$name=$_POST[name];
$passwd=$_POST[passwd];
$passwd_confrim=$_POST[passwd_confirm];
$email=$_POST[email];
$gender=$_POST[gender];
$phone=$_POST[phone1]."-".$_POST[phone2]."-".$_POST[phone3];
$address=$_POST[address];
$hobby=$_POST[hobby];
$intro=$_POST[intro];

echo "���̵� :  ".$id."<br>";
echo "�̸� :  ".$name."<br>";
echo "��й�ȣ :  ".$passwd."<br>";
echo "��й�ȣ Ȯ�� :  ".$passwd_confirm."<br>";
echo "�̸��� :  ".$email."<br>";
echo "���� :  ".$gender."<br>";
echo "�޴�����ȣ :  ".$phone."<br>";
echo "�ּ� :  ".$address."<br>";
echo "��� : ".$hobby."<br>";
echo "�ڱ�Ұ� :  ".$intro."<br>";

$query = "INSERT INTO mem VALUES ('$id','$name','$passwd','$email','$gender','$phone','$address','$hobby','$intro')";
$result = mysql_query($query);

?>
