<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立問卷頁面</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body{margin:30px;}


</style>
</head>
<body>
    
<form action="./api/save_subjct.php" method='post' class='col-6 m-auto'>
    <label >問卷主題:<input type="text" name="subject"></label>
    <label class='list-group-item'>選項一:<input type="text" name="options[]"></label>
    <label class='list-group-item'>選項二:<input type="text" name="options[]"></label>
    <label class='list-group-item'>選項三:<input type="text" name="options[]"></label>
    <label class='list-group-item'>選項四:<input type="text" name="options[]"></label>
    <input type="submit" value="送出">
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>