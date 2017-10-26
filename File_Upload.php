<!DOCTYPE html>
<html>
 <head>
 <meta charset="euc-kr">
 <title>파일입출력</title>
 </head>
 <body>
<?php
  $save_dir="files/";
  
  try {
  
   $_FILES["myFile"]["name"] = iconv("EUC-KR", "UTF-8",$_FILES["myFile"]["name"]);
   $dest=$save_dir . $_FILES["myFile"]["name"];
   if(!file_exists($dest)){
    throw new Exception('파일이 존재합니다');
   }
   
   if(!is_uploaded_file($_FILES["myFile"]["tmp_name"])){
    throw new Exception('파일이 첨부되지 않았습니다.');
   }
   
   echo "업로한 파일명 : ".$_FILES["myFile"]["name"]."<br/>";
   echo "업로한 파일의 크기 : ".$_FILES["myFile"]["size"]."<br/>";
   echo "업로한 파일의 MIME Type : ".$_FILES["myFile"]["type"]."<br/>";
   echo "임시 디렉토리에 저장된 파일명 : ".$_FILES["myFile"]["tmp_name"]."<br/>";
   move_uploaded_file($_FILES["myFile"]["tmp_name"],$dest);
   if(!move_uploaded_file($_FILES["myFile"]["tmp_name"],$dest)){
    throw new Exception("파일 업로드 실패!!");
   }
  } catch (Exception $e) {
   echo "Ex:" . $e->getMessage();
   echo '<script>alert("'.$e->getMessage().'");</script>';
  }
?>
 </body>
</html>