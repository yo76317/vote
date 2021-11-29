<h1>列出的投票問題列表</h1>
<?php
$subjects=all('topics');

// ol幫你排1.2.3.4
echo"<ol>";
foreach ($subjects as $key => $value) {
//假如rows大於0,就把提目列出
if(rows('options',['topic_id'=>$value['id']]) > 0){
echo"<li>";
// ?當前頁.  &後的id自設，是用來get
echo "<a href='index.php?do=vote&id={$value['id']}'>";
echo $value['topic'];
echo "</a>";
echo "</li>";
}
}
echo"</ol>";
?>