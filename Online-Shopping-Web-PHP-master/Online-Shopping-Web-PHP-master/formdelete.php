<?php

require('db/conn.php');
require "header.php";
require('db/product.php');
if (!isset($_GET["id"])) {
    die("Cần cung cấp id sản phẩm !!!");
}
$db = new conn();
$id = $_GET["id"];



$data = product::getOneByIdd($db->getConnnn(), $id);
$data2 = product::delete($db->getConnnn(), $id);
echo '<div class="my-5">Đã xóa thành công</div>';

exit();
