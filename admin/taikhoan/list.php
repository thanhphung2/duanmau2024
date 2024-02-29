<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>' . $role . '</td>
                                <td><a href="' . $xoatk . '" onclick="return confirm();"><input type="button" value="Xóa"></a></td>
                            </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
        </div>
    </div>
</div>