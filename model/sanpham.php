<?php
function insert_sanpham($tensanpham, $giasp, $hinh, $motasp, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensanpham','$giasp','$hinh','$motasp','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadallsp($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadonesp($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id, $iddm, $tensanpham, $giasp, $motasp, $hinh)
{
    if ($hinh != "")
        $sql = "UPDATE sanpham set iddm='" . $iddm . "', name='" . $tensanpham . "', price='" . $giasp . "',mota='" . $motasp . "',img='" . $hinh . "' where id=" . $id;
    else
        $sql = "UPDATE sanpham set iddm='" . $iddm . "', name='" . $tensanpham . "', price='" . $giasp . "',mota='" . $motasp . "' where id=" . $id;
    pdo_execute($sql);
}
function loadallSpHome()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadallSpTop10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
