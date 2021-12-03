<h2 class="text-center font-weight-bold">輪放圖管理</h2>

<div class="col-md-3 m-auto">
    <!-- 預顯圖檔 -->
    <img src="../image/<?=$ad['id'];?>" style='width:250px;border:3px solid black'>
        <form action="../api/edit_ad.php" method="post" enctype="multipart/form-data">
            <div class="custom-file d-block m-auto mb-2'">
                <!-- 檔名顯示 -->
                <label for="upload" class='custom-file-label'>選擇檔案：</label>
                <input class="custom-file-input" type="file" name="name" id="upload">
            </div>

            <!--  -->
            <div class="text-center mt-2 input-group mb-2 m-auto">
                <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
                <input class='form-control' type="text" name="intro" id="intro" value="<?=$ad['indro'];?>">
            </div>

            <div class="mx-auto mb-2">
                <input type="hidden" name="id" vlaue="">
                <input type="submit" value="上傳" class="btn btn-primary">
            </div>
        </form>
</div>