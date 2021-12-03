<!-- 給全部檔用的include，因為放上面，其它檔讀中間時也會吃到 -->
<?php include_once "../api/db.php"; 

  if(isset($_SESSION['user'])){
    to("../index.php");
    exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後臺問卷系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<style>
.container{
        min-height: 544px;
      }

</style>
<!-- 輪撥區 -->
<div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">  <!-- p = padding -->
  <a href="index.php">  <!-- 整格輪撥都是回首頁 -->
    <!-- position-absolute 絕對配置 -->
    <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
      <!-- top:-250 -->
      <div class="carousel-inner position-absolute" style="top:-250px ">
        <?php 
          $images=['dessert-02.jpg','dessert-09.jpg','dessert-07.jpg'];

            foreach($images as $key => $image){
              if($key==0){
                echo "<div class='carousel-item active'>";
              }else{
                echo "<div class='carousel-item'>";
              }

                echo "  <img class='d-block w-100' src='../image/{$image}' alt='First slide'>";
                echo "</div>";
            }
        ?>
      </div>
    </div>
  </a>
</div>

<nav class="bg-light shadow-lg py-3 px-2 mb-4 d-flex justfiy-content-between">
    <div>
      <a class='mx-2' href="?do=show_vote_list">問卷管理</div></a>
      <a class='mx-2' href="?do=member">會員管理</div></a>
      <a class='mx-2' href="?do=ad">廣告管理</div></a>
    </div>
        
    <?php 
      if(isset($_SESSION['user'])){
        echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
    ?>
    <div>
      <a class="btn btn-sm btn-primary mx-1" href="../logout.php">登出</a>
    </div>
    
    <?php
      }
    ?>
</nav>


<div class="container">
  <?php

    $do=(isset($_GET['do']))?$_GET['do']:'manage_vote';
    $file=$do.".php";  //字串.php變檔案名

    //假如檔案存在就include
    if(file_exists($file)){
        include $file;
      }else{     //沒檔案就 1.載入預設 2.載入指定
        include "manage_vote.php";
      }
  ?>  
</div>

<div class="p-3 text-center text-light bg-primary fixed-bottom">yo76317 地</div>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>