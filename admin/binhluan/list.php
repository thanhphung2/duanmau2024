<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Iduser</th>
                    <th>Idpro</th>
                    <th>Ngày binh luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $bl) {
                    extract($bl);
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $noidung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $idpro . '</td>
                                <td>' . $ngaybinhluan . '</td>
                                <td><a href="' . $xoabl . '" onclick="return confirm();"><input type="button" value="Xóa"></a></td>
                            </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
        </div>
    </div>
</div>