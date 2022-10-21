<?php
   
    require("models/model.products.php");

    $modelProducts= new Products();
    $product= $modelProducts-> getProduct($id);
    
    if(empty($product)){
        http_response_code(404);
    
        $message= "Not Found";
        $title= "Error";
    
        require("views/view.error.php");
        exit;
    }
    
    $title= $product["name"];
    
    require("views/view.product.php");
