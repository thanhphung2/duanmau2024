<div class="row">
    <div class="row formtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $maxprice . '</td>
                        <td>' . $minprice . '</td>
                        <td>' . $avgprice . '</td>
                    </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
        </div>
    </div>
</div>