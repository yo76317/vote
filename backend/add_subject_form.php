<h1 class="text-center font-weight-bold">新增問卷</h1>
<form action="../api/new_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject"></label>

    <!--增加選項-->
    <!-- <a href="../api/new_option.php">
        <input class='bg-info border-info text-light rounded' type="button" value="+">
    </a> -->
    
<!-- 
    依劇選項數($_session['option'])來產生選項
        if(isset($_SESSION['option'])){
            for($i=1;$i<=$_SESSION['option'];$i++){
                echo "<label class='list-group-tiem'>\n";
                echo "選項" . $i . "\n";
                echo "<input type='text' name='options[]' value=''>\n";
                echo "<input type='hidden' name='opt_id[]' value=''>\n";
                echo "</label>\n";
            }
        } -->
    

<div><input type="submit" value="送出"></div>
</form>