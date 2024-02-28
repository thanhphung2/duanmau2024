<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
    if ($del == 1) {
        $xoasp_th = '<th style="background-color: #CCC;">Thao tác</th>';
        $xoasp_td2 = '<td style="border: 1px #999 solid;
        padding: 5px 10px;
        text-align: center;"></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo ' <tr>
   <th style="background-color: #CCC;">Hình</th>
   <th style="background-color: #CCC;">Sản phẩm</th>
   <th style="background-color: #CCC;">Đơn giá</th>
   <th style="background-color: #CCC;">Số lượng</th>
   <th style="background-color: #CCC;">Thành tiền</th>
   ' . $xoasp_th . '
    </tr>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
        if ($del == 1) {
            $xoasp_td = '<td style="border: 1px #999 solid; padding: 5px 10px; text-align: center;>' . $xoasp . '</td>';
        } else {
            $xoasp_td = '';
        }
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
                ' . $xoasp_td . '
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
            ' . $xoasp_td2 . '
        </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
    }
    return $tong;
}
function insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart (iduser, idpro, img, name, price, soluong, thanhtien, idbill) 
            VALUES ('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute_return_lastInsertID($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1 ";
    if ($iduser > 0) $sql .= "AND iduser=" . $iduser;
    if ($kyw != "") $sql .= "AND id like '%" . $kyw . "%'";
    $sql .= "order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đơn hàng mới";
            break;
        case '2':
            $tt = "Đơn hàng mới";
            break;
        case '3':
            $tt = "Đơn hàng mới";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke()
{
    $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice ";
    $sql .= "from sanpham left join danhmuc on danhmuc.id=sanpham.iddm ";
    $sql .= "group by danhmuc.id order by danhmuc.id desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
