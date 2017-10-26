<?
mysql_connect('localhost','kbe0513','qh05dms13') or die (mysql_error());
mysql_select_db('kbe0513');

$name=$_POST[name];
$email=$_POST[email];
$passwd=$_POST[passwd];
$title=$_POST[title];
$contents=$_POST[contents];

echo "이름 : ".$name."<br>";
echo " 이메일 : ".$email."<br>";
echo "비밀번호 : ".$passwd."<br>";
echo "제목 : ".$title."<br>";
echo"내용 : ".$contents."<br>";

$query = "INSERT INTO write VALUES ('$name','$email','$passwd','$title','$contents')";
$result = mysql_query($query);

//echo ("<script>");
//echo ("alert('작성 완료.');");
//echo ("</script>");
?>