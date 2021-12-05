<?php
// AND &&
$sql="SELECT *
    FROM `topics`,
        `options`
        WHERE `topics`.`id`=`options`.`topic_id` AND
                `topics`.`id`='{$_GET['id']}'";
//因為陣列會有兩個id,右邊的會取消掉,後面往前寫,所以左邊的蓋掉前面(右邊)了
$rows=q($sql);
?>

<!-- 題目內容 -->
<h1><?= $rows[0]['topic']; ?></h1>

<ol class="list-group col-md-4" style="font-size:1.2rem">
<?php 
    foreach($rows as $row){   //全部列出
        echo "<li class='list-group-item'>";
        echo "<span>{$row['opt']}</span>";
        echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
        echo "</li>";
    }
?>
</ol>