<?php
include_once "./db.php";

$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

update('topics',['topic'=>$topic],['id'=>$topic_id]);

$options=$_POST['options'];
$opt_id=$_POST['opt_id'];
foreach ($options as $key => $opt) {
    //沒對應id 在上三行如果都不存在就新增，是的話就更新  
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        del('options',$opt_id[$key]);
    }
}
to("../backend/index.php")

?>