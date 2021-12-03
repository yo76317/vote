<?php include_once "db.php";

    // sh=>if(sh==1) sh=0 else sh=1
    // +1%2 不必知道值
    // 多項用switch

    $id=$_GET['id'];
    update('ad',['sh'=>??],['id'=>$id]);
    $img['sh']=($img['sh']+1)%2;
    update('ad',['sh'=>$img['sh']],['id'=>$img['id']]);

    to("../backend/?do=ad");
?>