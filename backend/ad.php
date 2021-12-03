<h2 class="text-center font-weight-bold">輪放圖管理</h2>
    <div class="row">
        <div class="col-md-3">
            <form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">
                <div class="custom-file d-block m-auto mb-2'">
                    <label for="upload" class='custom-file-label'>選擇檔案：</label>
                    <input class="custom-file-input" type="file" name="name" id="upload">
                </div>

                <!--  -->
                <div class="text-center mt-2 input-group mb-2 m-auto">
                <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
                    <input class='form-control' type="text" name="intro" id="intro">
                </div>

                <div class="mx-auto mb-2">
                    <input type="submit" value="上傳" class="btn btn-primary">
                </div>
            </form>
        </div>


            <div class="col-9">
                <h3 class="text-center">圖片列表</h3>
                    <table class="table">
                        <tr>
                            <td>圖片</td>
                            <td>說明</td>
                            <td>狀態</td>
                            <td>管理</td>
                        </tr>

                        <?php
                            $rows=all('ad');
                                foreach($rows as $row){
                                echo "<tr>";
                                    echo "<td>";
                                        echo "<img src='../image/{$row['name']}' style='width:100px;height:75px'>";
                                    echo "</td>";

                                    echo "<td>{$row['intro']}</td>";

                                    echo "<td>";
                                        echo ($row['sh']==1)?"顯示中":"未上架";
                                    echo "</td>";
                                    
                                    echo "<td>";
                                        echo "<a class='btn btn-info' href='?do=edit_ad&id={$row['id']}>修改說明</a>";
                                        echo "<button>重新上傳</button>";
                                        echo "<a class='btn btn-danger' href='../api/del_ad.php?id={$>刪除</button>";
                                    echo "</td>";
                                echo "</tr>";
                                } 
                        ?>
                    </table>         
            </div>       
        </div>       

    
