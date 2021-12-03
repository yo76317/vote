<h1 class="text-center font-weight-bold">新增問題</h1>
<form action="../api/save_subjct.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject" ></label>

    <!--增加選項-->
    <a href="../api/new_option.php">
        <input class='bg-info border-info text-light rounded' type="button" value="+">
    </a>
    
    <label class='list-group-tiem'>;
        選項
        <input type='text' name='options[]' value=''>
        <input type='hidden' name='opt_id[]' value=''>
    </label>   

    <div><input type="submit" value="送出"></iv>
</form>