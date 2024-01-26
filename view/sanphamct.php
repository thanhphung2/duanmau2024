<div class="row mb">
    <div class="boxtrai">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle">
                <?= $name ?>
            </div>
            <div class="row boxcontent">
                <?php
                extract($onesp);
                $img = $img_path . $img;
                echo '<div class="row mb spct"><img src=' . $img . '></div>';
                echo $mota;
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">
                BÌNH LUẬN
            </div>
            <div class="row boxcontent">
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">
                SẢN PHẨM CÙNG LOẠI
            </div>
            <div class="row boxcontent">
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>