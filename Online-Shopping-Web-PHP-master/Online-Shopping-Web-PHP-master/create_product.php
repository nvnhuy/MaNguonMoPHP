<?php

require('db/conn.php');
require "header.php";
require('db/product.php');
$Name = '';
$Descc = '';
$Price = '';


$error = '';
$nameErrors = '';
$descErrors = '';
$priceErrors = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $Name = $_POST['Name'];
    $Desc = $_POST['Descc'];
    $Price = $_POST['Price'];


    if (empty($Name)) {
        $nameErrors = 'Name is required';
    }

    if (empty($Descc)) {
        $descErrors = 'Description is required';
    }

    if (empty($Price)) {
        $priceErrors = 'Price is required';
    } elseif ($Price % 1000 != 0) {
        $priceErrors = 'Price must be devisible by 1000.';
    }
    if (!$nameErrors && !$descErrors && !$priceErrors) {
        $db = new conn();
        $pdo = $db->getConnnn();
        $product = new product();
        $product->Name = $Name;
        $product->Desc = $Descc;
        $product->Price = $Price;
        if ($watch->create($pdo)) {
            header("Location: watch.php?id={$watch->Id}");
        }
    }
}

?>
<?php if (!$error) : ?>
    <div class="container my-5">
        <h2>Tạo mới sản phẩm</h2>
        <form method="post">
            <div class="form-group">
                <label for="Name">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="Name" name="Name" value="<?= $Name ?>"> <span class="text-danger fw-bold"><?= $nameErrors ?></span>
            </div>

            <div class="form-group">
                <label for="Desc">Mô tả: </label>
                <input type="text" class="form-control" id="Desc" name="Desc" value="<?= $Desc ?>"> <span class="text-danger fw-bold"><?= $descErrors ?></span>
            </div>

            <div class="form-group">
                <label for="Price">Giá:</label>
                <input type="number" class="form-control" id="Price" name="Price" value="<?= $Price ?>"> <span class="text-danger fw-bold"><?= $priceErrors ?></span>
            </div>
            <div class="form-group">
                <label for="id_cate">Giá:</label>
                <input type="number" class="form-control" name="id_cate" id="id_cate" value="<?= $id_cate ?>"> <span class="text-danger fw-bold"><?= $priceErrors ?></span>
            </div>-
            <!-- <div class="form-group my-3">
                <h4>Loại sản phẩm</h4>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="id_cat" id="id_cat" value="1">
                    <label class="form-check-label" for="id_cat">1. CASIO</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="id_cat" id="id_cat" value="2">
                    <label class="form-check-label" for="id_cat">2. G-SHOCK</label>
                </div>
            </div> -->

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
<?php else : ?>
    <h2 class="text-center text-danger"><?= $error ?></h2>

<?php endif; ?>