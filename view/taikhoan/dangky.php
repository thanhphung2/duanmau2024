<script>
    function validateForm() {
        var email = document.forms["myForm"]["email"].value;
        var tendangnhap = document.forms["myForm"]["user"].value;
        var matkhau = document.forms["myForm"]["pass"].value;

        // Regular expression for email validation
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (tendangnhap == "" || email == "" || matkhau == "" || !email.match(emailRegex)) {
            alert("Vui lòng kiểm tra lại thông tin.");
            return false;
        }
    }
</script>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="boxtitle">
            ĐĂNG KÝ THÀNH VIÊN
        </div>
        <div class="row boxcontent formtaikhoan">
            <form name="myForm" action="index.php?act=dangky" method="post" onsubmit="return validateForm()">
                <div class="row mb10">
                    Email
                    <input type="email" name="email">
                </div>
                <div class="row mb10">
                    Tên đăng nhập
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    Mật khẩu
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhập lại">
                </div>
            </form>
            <h2 class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>

        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>