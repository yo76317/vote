<?php
include_once "db.php";

$topic=$_POST['topic'];
$topic_id=$_POST['topic_id'];

update('topics',['topic'=>$topic],['id'=>$topic_id]);

$options=$_POST['options'];
$opt_id=$_POST['pot_id'];
foreach($options as $key=>$opt){
    //沒對應id 在上三行如果都不存在就新增，是的話就更新  
    if(array_key_exists($key,$opt_id)){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        insert('options',['opt'=>$opt],'topic_id'=>$topic_id]);
    }
}
to("../backend/index.php");
?>