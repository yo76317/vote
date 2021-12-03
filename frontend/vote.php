<?php
$id=$_GET['id'];
$subject=find('topics',$id);

//上面get到id,請去找topic相對應的id出來
$options=all('options',['topic_id'=>$id]);

?>

<h1><?=$subject['topic'];?></h1>
<ol class='list-group'>

<form action="./api/save_vote.php" method="post">

<?php
// 列出  
// label行內 class佔整行 
foreach($options as $key=>$opt){
    echo "<label class='list-group-item list-group-item-success list-group-item-action'>";
    echo "<input type='radio' name='opt' value='{$opt['id']}'>"; //name盡量跟資料表名稱一樣,opt單選不用加陣列,多選要加陣列
    echo $opt['opt'];
    echo "</label>";
}
?>

</ol>
<input type="submit" value="投票" class='btn btn-info mt-3'>
</form>