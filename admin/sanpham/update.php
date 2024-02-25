<?php
if (is_array($sp)) {
    extract($sp);
}
$hinhpath = "../uploads/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . " 'height ='80'";
} else {
    $hinh = "no photo";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật sản phẩm</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục<br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option ' . ($iddm == $danhmuc['id'] ? 'selected' : '') . ' value="' . $danhmuc['id'] . '" >' . $danhmuc['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensanpham" value="<?= $sp['name'] ?>">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="number" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" id="">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="motasp" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $sp['id'] ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>