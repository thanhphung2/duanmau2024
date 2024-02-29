<script>
    function validateForm() {
        var tenloai = document.forms["myForm"]["tenloai"].value;

        if (tenloai == "") {
            alert("Vui lòng kiểm tra lại thông tin.");
            return false;
        }
    }
</script>
<div class="row">
    <div class="row formtitle">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form name="myForm" action="index.php?act=adddm" method="post" onsubmit="return validateForm()">
            <div class=" row mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>