<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ファイルアップロード</title>
<style>
label > input {
	display:none;
}
label {
	color: white;
	background-color: #4444AA;
	padding: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', '游ゴシック  Medium', meiryo, sans-serif;
}
</style>
</head>
<body>
<h1>TEST</h1>
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
  
  <label for="file_photo">カメラで撮影
  <input type="file" name="file" accept="image/*" id="file_photo" capture="environment" />
  </label>
  <input type="submit" value="ファイルをアップロードする">
</form>
</body>
</html>
