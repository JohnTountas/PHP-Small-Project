<?php

class Products
{

    private $xml_file_path = '';

    public function __construct($xml_file_path = '')
    {
        $this->xml_file_path = $xml_file_path;
    }

    /**
     * This function prints an HTML table with every product that read from the xml file
     * @return void 
     */
    public function print_html_table_with_all_products()
    {
        
        $xmldata = simplexml_load_file($this->xml_file_path) or die("Failed to load");
        $xml_data = $xmldata->children();

        echo "<table border ='8'>";
        echo "<tr>
                <th> Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Category </th>
                <th> Manufacturer </th>
                <th> Barcode </th>
                <th> Weight </th>
                <th> In Stock </th>
                <th> Availability </th>
              </tr>";

        foreach ($xml_data->PRODUCTS->PRODUCT as $key => $prod) {
            
            $this->print_html_of_one_product_line($prod);
        
        }
        echo "</table>";
    }

    /**
     * This function prints the HTML 'tr' for a given product
     * @param mixed $prod It is the product object as retrieved from the xml file
     * @return void 
     */
    private function print_html_of_one_product_line($prod){


        echo "<tr>";
        echo "<td>" . $prod -> NAME . "</td>";
        echo "<td>" . $prod -> PRICE . "</td>";
        echo "<td>" . $prod -> QUANTITY . "</td>";
        echo "<td>" . $prod -> CATEGORY . "</td>";
        echo "<td>" . $prod -> MANUFACTURER . "</td>";
        echo "<td>" . $prod -> BARCODE . "</td>";
        echo "<td>" . $prod -> WEIGHT . "</td>";
        echo "<td>" . $prod -> INSTOCK . "</td>";
        echo "<td>" . $prod -> AVAILABILITY . "</td>";
        echo "</tr>";

    }




    //This function creates a new product 
    public function Add_Products($product_data)
    {
        $xmldata = simplexml_load_file($this->xml_file_path) or die("Failed to load");
    
        $new_product = $xmldata -> PRODUCTS -> addChild ('PRODUCT');
        $new_product -> addChild ('NAME', $product_data['name']);
        $new_product -> addChild ('PRICE', $product_data['price']);
        $new_product -> addChild ('QUANTITY', $product_data['quantity']);
        $new_product -> addChild ('CATEGORY', $product_data['category']);
        $new_product -> addChild ('MANUFACTURER', $product_data['manufacturer']);
        $new_product -> addChild ('BARCODE', $product_data['barcode']);
        $new_product -> addChild ('WEIGHT', $product_data['weight']);
        $new_product -> addChild ('INSTOCK', $product_data['instock']);
        $new_product -> addChild ('AVAILABILITY', $product_data['availability']);
        
    
        $xmldata->asXML($this->xml_file_path);
    }

}

?>