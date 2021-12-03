<?php

$subject=find('topics',$_GET['id']);
$options=all('options',['topic_id'=>$_GET['id']]);

?>

<!-- 以下是修改功能 -->
<form action="../api/edit_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="topic" value='<?=$subject['topic'];?>'></label>
    <input type="hidden" name="topic_id" value="<?=$subject['id'];?>" >
    <!-- <button type="button">+</button> -->
    <!--增加選項-->
    <a href="../api/add_option.php?id=<?=$subject['id'];?>">
        <input class='bg-info border-info text-light rounded' type="button" value="+">
    </a>

    <?php 
    foreach($options as $key => $opt){
        echo "<label class='list-group-item'>\n";
        echo   "選項" . ($key+1) ."\n";  //算式要加括號
        echo   "<input type='text' name='options[]' value='{$opt['opt']}'>\n";
        echo   "<input type='hidden' name='opt_id[]' value='{$opt['id']}'>\n";
        echo "</label>\n";
    }


//如果options的count<= 補齊
    // if(count($options)<=4){
    //     for($i=0;$i<(4-count($options));$i++){
            
    //         echo "<label class='list-group-item'>";
    //         echo   "選項" . (count($options)+1+$i);
    //         echo   "<input type='text' name='options[]' value=''>"; 
    //         echo "</label>"; 
            
    //     }
    // }
// echo   "<input type='' name='options[]' value=''>"; 不會有id所以拿掉

    ?>

<input type="submit" value="送出">
</form>