<div class="row mb">
    <div class="boxtrai mr">
        <div class="row boxcenter mb">
            <form action="index.php?act=billconfirm" method="post">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent mb">
                    <table class="mb">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $user = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="user" value="<?= $user ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <div class="boxtitle">
                        PHƯƠNG THỨC THANH TOÁN
                    </div>
                    <div class="row boxcontent3">
                        <table>
                            <tr><input type="radio" name="pttt" value="1" checked>Thanh toán khi nhận hàng</tr>
                            <br>
                            <tr><input type="radio" name="pttt" value="2">Chuyển khoản ngân hàng</tr>
                            <br>
                            <tr><input type="radio" name="pttt" value="3">Thanh toán online</tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">
                        THÔNG TIN GIỎ HÀNG
                    </div>
                    <div class="row boxcontent cart">
                        <table>
                            <?php viewcart(0) ?>
                        </table>
                    </div>
                </div>

                <div class="row bill mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                </div>
            </form>


        </div>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>