<?php
require('db/conn.php');
require "header.php";
require('db/product.php');

if (!isset($_GET["id"])) {
    die("Cần cung cấp id sản phẩm !!!");
}

$id = $_GET["id"];


$id = $_GET["id"];
$db = new conn();
$pdo = $db->getConnnn();

$dt = product::getOneByIdd($pdo, $id);
?>
<div class="row my-5 mx-0 bg-light">
    <div class="col-md-7" style="margin-top:100px">
        <img style="height: 30 rem;width:70%;" class="card-img-top" src="images/<?= $dt->img ?> " alt="">
    </div>

    <div class="col-md-4">

        <h5 style="color:black;font-weight:lighter;letter-spacing:1px" class="card-title my-3">ĐỒNG HỒ SỐ</h5>
        <h5 style="color:black;font-weight:lighter;letter-spacing:2px" class="card-title my-1">G-SHOCK</h5>

        <h1 style="color:black;font-weight:bold;text-align:justify" class="card-title"><?= $dt->Name ?></h1></br>

        <h3 style="color:red;font-weight:bold;text-align:justify" class="card-title"><?= $dt->Price ?><span style="color:red;font-weight:bold;text-align:justify"> VNĐ</span></h3></br>

        <p style=" color:black;font-weight:lighter;font-size:large"><?= $dt->Descc ?></p>

        <button style="width: 15rem;border-radius:0%" type=" button" class="btn btn-danger">
            Thêm vào giỏ hàng
        </button>
        <?php if (isset($_SESSION['log_detail1'])) {
            echo ' <button style="width: 15rem;border-radius:0%" type=" button" class="btn btn-danger">';

            echo '<a href="formeditproduct.php?id=' . $id . '"> Sửa sản phẩm</a>';
        } else {
            echo '';
        }
        ?>
        <?php if (isset($_SESSION['log_detail1'])) {
            echo ' <button style="width: 15rem;border-radius:0%" type=" button" class="btn btn-danger">
          
           <a href="create_watch.php"> Xóa sản phẩm</a>
       </button>';
        } else {
            echo '';
        }
        ?>
    </div>
</div>
<?=
require 'footer.php';
?>