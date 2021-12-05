<?php include_once "db.php";

// echo檢查語法有無錯誤
    /* echo "tmp_name=>".$_FILES['name']['tmp_name']."<br>";
    echo "filename=>".$_FILES['name']['name']."<br>";
    echo "intro=>".$_POST['intro']."<br>"; */

// 檔案的資訊是存在intro
//先判斷是否有檔案上傳成功的動作
if(!empty($_FILES['name']['tmp_name'])){

    //取得表單傳來的intro欄位資料
    $intro=$_POST['intro'];

    //取得上傳檔案的原始檔名
    $filename=$_FILES['name']['name'];

    //檔案從name,tmp_name移動到當前地方
    //將檔案從暫存路徑搬移至指定路徑
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    //新增 資料表ad 裡面的name放$filename sh給0 intro放$intro
    //使用insert自訂函式來完成新增廣告圖片的動作
    insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);

}

 //結束到ad頁面
//新增完畢，導向回廣告管理頁面
to("../backend/?do=ad");

?>