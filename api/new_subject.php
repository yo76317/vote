
<?php
include_once "./db.php";


// 單純新增欄位
$topic=['topic'=>$_POST['subject']];
insert('topics',$topic);

// 資料表的欄位名稱=>資料內容

// $topic_sql="select * from `topics` where `topic`='{$_POST['subject']}'";
// echo $topic_sql;
// $topic=$pdo->query($topic_sql)->fetch();

// foreach($_POST['options'] as $opt){
//     if($opt!=""){
//         $opt_array=["opt"=>$opt,"topic_id"=>$topic['id']];
//         insert('options',$opt_array);
//     }
// }

to("../backend");

?>