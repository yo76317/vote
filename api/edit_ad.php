<?php include_once "db.php";

// 檔案也可能不上傳，這樣會變空值，所以拔掉成檔案更新就傳檔案，不然就不傳檔案
$ad=find("ad",$_POST['id']);

//判斷是否有做圖片上傳的動作
if(!empty($_FILES['name']['tmp_name'])){

    //取得圖片名稱
    $filename=$_FILES['name']['name'];

    //搬移上傳的圖片檔至指定的目錄下
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);
}

//取得表單傳來的intro欄位資料
$intro=$_POST['intro'];

// 如果有filename就會把name加上去，如果沒有的話就只更新說明文字
//根據是否有上傳檔片來決定要執行那一項更新指令
if(isset($filename)){
    update('ad',['name'=>$filename,'intro'=>$intro],['id'=>$_POST['id']]);
}else{
    update('ad',['intro'=>$intro],['id'=>$_POST['id']]);
}

//更新完成，導向回廣告頁
to("../backend/?do=ad");

?>