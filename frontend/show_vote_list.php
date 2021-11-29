<h1>列出的投票問題列表</h1>
<?php
$subjects=all('topics');

// ol幫你排1.2.3.4 
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {
//假如rows大於0,就把提目列出
if(rows('options',['topic_id'=>$value['id']]) > 0){
echo"<li class='list-group-item'>";
// 題目   ?當前頁.  &後的id自設，是用來get 
echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
echo $value['topic'];
echo "</a>";

//投票總數
$count=q("SELECT sum(`count`) as '總計' FROM `options` where `topic_id`='{$value['id']}'");
echo "<span class='d-inline-block col-md-2 text-center'>";
echo $count[0]['總計'];
echo "</span>";

//結果顯示
echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
echo "<button class='btn btn-primary'>觀看結果</button>";
echo "</a>";

echo "</li>";
}
}
echo"</ol>";
?>