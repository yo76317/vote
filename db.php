<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=yo76317";
    $pdo=new PDO($dsn,'root','');

function insert($table,$array){
    global $pdo;

    $sql="INSERT into $table(`" . implode('`,`',array_keys($array)) . "`)
                      value('". implode("','",$array)."')";


// return $pdo->exec($sql);
}
// $array=['id'=>'1',
// 'subject'=>'今天吃什麼'];

// print_r(array_key($array));


?>