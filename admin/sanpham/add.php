<script>
    function validateForm() {
        var tensanpham = document.forms["myForm"]["tensanpham"].value;
        var giasp = document.forms["myForm"]["giasp"].value;

        if (tensanpham == "" || giasp == "" || giasp < 0) {
            alert("Vui lòng kiểm tra lại thông tin.");
            return false;
        }
    }
</script>
<div class="row">
    <div class="row formtitle">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="row formcontent">
        <form name="myForm" action="index.php?act=addsp" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class=" row mb10">
                Danh mục<br>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensanpham">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="number" name="giasp">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="motasp" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>