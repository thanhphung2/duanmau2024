<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row boxcenter">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent box1">
                <table style="width: 100%;
            border-collapse: collapse;">
                    <tr>
                        <th style="background-color: #CCC;">Hình</th>
                        <th style="background-color: #CCC;">Sản phẩm</th>
                        <th style="background-color: #CCC;">Đơn giá</th>
                        <th style="background-color: #CCC;">Số lượng</th>
                        <th style="background-color: #CCC;">Thành tiền</th>
                        <th style="background-color: #CCC;">Thao tác</th>
                    </tr>
                    <?php
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong = $tong + $ttien;
                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
                        echo '<tr>
                                <td style="border: 1px #999 solid;
                                padding: 5px 10px;
                                text-align: center;"><img src="' . $hinh . '" alt="" height="80px"></td>
                                <td style="border: 1px #999 solid;
                                padding: 5px 10px;
                                text-align: center;">' . $cart[1] . '</td>
                                <td style="border: 1px #999 solid;
                                padding: 5px 10px;
                                text-align: center;">' . $cart[3] . '</td>
                                <td style="border: 1px #999 solid;
                                padding: 5px 10px;
                                text-align: center;">' . $cart[4] . '</td>
                                <td style="border: 1px #999 solid;
                                padding: 5px 10px;
                                text-align: center;">' . $ttien . '</td>
                                <td style="border: 1px #999 solid;
                                padding: 5px 10px;
                                text-align: center;">' . $xoasp . '</td>
                            </tr>';
                        $i += 1;
                    }
                    echo ' <tr>
                            <td colspan="4" style="border: 1px #999 solid;
                            padding: 5px 10px;
                            text-align: center;">Tổng đơn hàng</td>
                            <td style="border: 1px #999 solid;
                            padding: 5px 10px;
                            text-align: center;">' . $tong . '</td>
                            <td style="border: 1px #999 solid;
                            padding: 5px 10px;
                            text-align: center;"></td>
                        </tr>';
                    ?>
                </table>
            </div>
        </div>

        <div class="row mb bill">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG">
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>