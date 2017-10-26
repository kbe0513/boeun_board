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

echo "아이디 :  ".$id."<br>";
echo "이름 :  ".$name."<br>";
echo "비밀번호 :  ".$passwd."<br>";
echo "비밀번호 확인 :  ".$passwd_confirm."<br>";
echo "이메일 :  ".$email."<br>";
echo "성별 :  ".$gender."<br>";
echo "휴대폰번호 :  ".$phone."<br>";
echo "주소 :  ".$address."<br>";
echo "취미 : ".$hobby."<br>";
echo "자기소개 :  ".$intro."<br>";

$query = "INSERT INTO mem VALUES ('$id','$name','$passwd','$email','$gender','$phone','$address','$hobby','$intro')";
$result = mysql_query($query);

?>
