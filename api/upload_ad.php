<?php include_once "db.php";
    // echo檢查語法有無錯誤
    /* echo "tmp_name=>".$_FILES['name']['tmp_name']."<br>";
    echo "filename=>".$_FILES['name']['name']."<br>";
    echo "intro=>".$_POST['intro']."<br>"; */

    // 檔案的資訊是存在intro
    if(!empty($_FILES['name']['tmp_name'])){
        $intro=$_POST['intro'];
        $filename=$_FILES['name']['name'];
    
        //檔案從name,tmp_name移動到當前地方
        move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);
    
        //新增 資料表ad 裡面的name放$filename sh給0 intro放$intro
        insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);
        
    }

 //結束到ad頁面
 to("../backend/?do=ad");

?>