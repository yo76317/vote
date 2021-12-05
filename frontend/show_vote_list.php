    <h1>列出所有的問題</h1>
    <?php
    $subjects=all('topics');
    // ol幫你排1.2.3.4 
    echo "<ol class='list-group'>";
    foreach ($subjects as $key => $value) {
        //假如rows大於0,就把提目列出
        if(rows('options',['topic_id'=>$value['id']]) > 0){
        echo "<li class='list-group-item'>";
// 題目   ?當前頁.  &後的id自設，是用來get 
    //有登入的會員才能使用投票功能
    if(isset($_SESSION['user'])){
        echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
        echo $value['topic'];
        echo "</a>";
    }else{
        
        echo "<span class='d-inline-block col-md-8'>".$value['topic']."</span>";
    }
    
    //總投票數顯示
    $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<span class='d-inline-block col-md-2 text-center'>";
    echo $count[0]['總計'];
    echo "</span>";
    
    //看結果按鈕
    echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
    echo "<button class='btn btn-primary'>觀看結果</button>";
    echo "</a>";

    echo "</li>";
}
}
echo "</ol>";

?>