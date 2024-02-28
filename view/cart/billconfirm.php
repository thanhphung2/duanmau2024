<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">
                CẢM ƠN
            </div>
            <div class="row boxcontent3" style="text-align:center">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="row mb">

            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row boxcontent3" style="text-align:center">
                <li>
                    Mã đơn hàng: DAM-<?= $bill['id']; ?>
                </li>
                <li>
                    Ngày đặt hàng: <?= $bill['ngaydathang']; ?>
                </li>
                <li>
                    Tổng đơn hàng: <?= $bill['total']; ?>
                </li>
                <li>
                    Phương thức thanh toán: <?= $bill['bill_pttt']; ?>
                </li>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent3 billform">
                <table>
                    <tr>
                        <td>
                            Người đặt hàng:
                        </td>
                        <td><?= $bill['bill_name']; ?></td>
                    </tr>
                    <tr>
                        <td>
                            Địa chỉ:
                        </td>
                        <td><?= $bill['bill_address']; ?></td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td><?= $bill['bill_email']; ?></td>
                    </tr>
                    <tr>
                        <td>
                            Điện thoại:
                        </td>
                        <td><?= $bill['bill_tel']; ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>