<?php include_once "db.php";

// 先刪除圖檔，再刪資料庫 才不會因資料庫先刪而找不到圖檔資料
unlink("../image".$image['anme']);
$image=find('ad',$_GET['id']);
del('ad',$_GET['id']);



to('../backend/?do=ad');
?>