<?php
   
    require("models/model.products.php");

    $modelProducts= new Products();
    $products= $modelProducts-> getProduct($id);
    
    if(empty($products)){
        http_response_code(404);
    
        $message= "Not Found";
        $title= "Error";
    
        require("views/view.error.php");
        exit;
    }
    
    $title= $products["name"];
    
    require("views/view.products.php");
