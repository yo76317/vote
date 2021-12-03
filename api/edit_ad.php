<?php include_once "db.php";

$ad=find("ad",$_POST['id']);


// 檔案也可能不上傳，這樣會變空值，所以拔掉成檔案更新就傳檔案，不然就不傳檔案



// 如果有filename就會把name加上去，如果沒有的話就只更新說明文字

    if(issete($filename)){
        update('ad',['name'=>$filename,'intro'=>$intro],['id'=>$_POST['id']]);
    }else{
        
    }
to("../backend/?do=ad");