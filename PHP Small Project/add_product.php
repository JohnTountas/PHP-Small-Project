
<?php

//It handles the form's data and adds the new product to the 'product.xml' file
require_once "./lib.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_data = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
        'category' => $_POST['category'],
        'manufacturer' => $_POST['manufacturer'],
        'barcode' => $_POST['barcode'],
        'weight' => $_POST['weight'],
        'instock' => $_POST['instock'],
        'availability' => $_POST['availability']
    ];

    $productsList = new Products("./products.xml");
    $productsList -> Add_Products($product_data);

    header ("Location: products.php");

    exit();
}
?>