<?php include_once "db.php";?>

<?php
if(isset($_SESSION['option'])){
    $_SESSION['option']++;
}else{
    $_SESSION['option']=1;
}
?>

