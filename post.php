<?php
try{
    if(is_uploaded_file($_FILES['file']['tmp_name'])){
        move_uploaded_file($_FILES['file']['tmp_name'], './'.$_FILES['file']['name']);
        }
    }catch(Exception $e) {
        echo 'エラー:', $e->getMessage().PHP_EOL;
    }

if($_FILES['file']){
    print_r($_FILES['file']);
}
?>
<form action="./post.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file" accept="image/*"  capture="environment" />
  <input type="submit" value="ファイルをアップロードする">
</form>
