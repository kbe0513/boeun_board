<!DOCTYPE html>
<html>
 <head>
 <meta charset="euc-kr">
 <title>���������</title>
 </head>
 <body>
<?php
  $save_dir="files/";
  
  try {
  
   $_FILES["myFile"]["name"] = iconv("EUC-KR", "UTF-8",$_FILES["myFile"]["name"]);
   $dest=$save_dir . $_FILES["myFile"]["name"];
   if(!file_exists($dest)){
    throw new Exception('������ �����մϴ�');
   }
   
   if(!is_uploaded_file($_FILES["myFile"]["tmp_name"])){
    throw new Exception('������ ÷�ε��� �ʾҽ��ϴ�.');
   }
   
   echo "������ ���ϸ� : ".$_FILES["myFile"]["name"]."<br/>";
   echo "������ ������ ũ�� : ".$_FILES["myFile"]["size"]."<br/>";
   echo "������ ������ MIME Type : ".$_FILES["myFile"]["type"]."<br/>";
   echo "�ӽ� ���丮�� ����� ���ϸ� : ".$_FILES["myFile"]["tmp_name"]."<br/>";
   move_uploaded_file($_FILES["myFile"]["tmp_name"],$dest);
   if(!move_uploaded_file($_FILES["myFile"]["tmp_name"],$dest)){
    throw new Exception("���� ���ε� ����!!");
   }
  } catch (Exception $e) {
   echo "Ex:" . $e->getMessage();
   echo '<script>alert("'.$e->getMessage().'");</script>';
  }
?>
 </body>
</html>