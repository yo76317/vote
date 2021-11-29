<?php
$id=$_GET['id'];
$subject=find('topics',$id);

//上面get到id,請去找topic相對應的id出來
$options=all('options',['topic_id'=>$id]);

?>

<h1><?=$subject['topic'];?></h1>
<ol>

<form action="./api/save_vote.php" method="post">

<?php
// 列出 
foreach($options as $key=>$opt){
    echo "<li>";
    echo "<input type='radio' name='opt' value='{$opt['id']}'>"; //name盡量跟資料表名稱一樣,opt單選不用加陣列,多選要加陣列
    echo $opt['opt'];
    echo "</li>";
}
?>

</ol>
<input type="submit" value="投票">
</form>