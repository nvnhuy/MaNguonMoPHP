<?php
require('db/conn.php');
require "header.php";
require('db/product.php');
if (!isset($_GET["id"])) {
    die("Cần cung cấp id sản phẩm !!!");
}
$db = new conn();
$id = $_GET["id"];


$product = product::getOneByIdd($db->getConnnn(), $id);
// Kiểm tra xem form đã được submit hay chưa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy giá trị từ form
    $Id = $_POST['Id'];
    $Name = $_POST['Name'];
    $Descc = $_POST['Descc'];
    $Price = $_POST['Price'];

    // Gọi hàm suaSanPham để sửa đổi thông tin sản phẩm
    product::update($Id, $Name, $Descc, $Price, $db->getConnnn());
    header('Location: formeditproduct.php?id=' . $Id);
    exit();
}
?>

<div class="container">
    <h2>Form Sửa Sản Phẩm</h2>

    <form method="post">
        <div class="form-group">
            <label for="Id">Mã sản phẩm:</label>
            <input readonly type="text" class="form-control" name="Id" value="<?= $product->Id ?>">
        </div>

        <div class="form-group">
            <label for="Name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="Name" value="<?= $product->Name ?>">
        </div>

        <div class="form-group">
            <label for="Descc">Mô tả sản phẩm:</label>
            <input type="text" class="form-control" name="Descc" value="<?= $product->Descc ?>">

        </div>

        <div class="form-group">
            <label for="Price">Giá sản phẩm:</label>
            <input type="number" class="form-control" name="Price" value="<?= $product->Price ?>">
        </div>
        <button type="submit" class="btn btn-primary">Sửa thông tin</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>