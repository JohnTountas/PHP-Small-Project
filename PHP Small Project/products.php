<!DOCTYPE html>
<html>
<body>

<h1>1. List of products</h1>

<?php
    require_once "./lib.php";

        $productsList = new Products("./products.xml");
        $productsList->print_html_table_with_all_products();
    

?>

<br><br>
<hr><br>


<!-- The form's data has been sending to the "add_product.php" -->

<h2>2. Add New Product</h2>

<form action="add_product.php" method="post">

    <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br><br>
    
    <label for="price">Price:</label><br>
      <input type="text" id="price" name="price"><br><br>
    
    <label for="quantity">Quantity:</label><br>
      <input type="number" id="quantity" name="quantity"><br><br>
    
    <label for="category">Category:</label><br>
      <input type="text" id="category" name="category"><br><br>
    
    <label for="manufacturer">Manufacturer:</label><br>
      <input type="text" id="manufacturer" name="manufacturer"><br><br>
    
    <label for="barcode">Barcode:</label><br>
      <input type="text" id="barcode" name="barcode"><br><br>
    
    <label for="weight">Weight:</label><br>
      <input type="text" id="weight" name="weight"><br><br>
    
    <label for="instock">In Stock:</label><br>
      <input type="text" id="instock" name="instock"><br><br>
    
    <label for="availability">Availability:</label><br>
      <input type="text" id="availability" name="availability"><br><br>
    
    <input type="submit" value="Add Product">

</form>

</body>
</html>

