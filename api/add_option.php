<?php include_once "db.php";?>

<?php

$id=$_GET['id'];
insert('options',['opt'=>"",'topic_id'=>$id]);

to("../bakced/?do=edit_subject&id=$id");

?>