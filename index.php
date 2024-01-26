<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
$spnew = loadallSpHome();
$dsdm = loadall();
$dstop10 = loadallSpTop10();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadallsp($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadonesp($id);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            # code...
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
