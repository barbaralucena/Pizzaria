<?php
    if(isset($_POST["removeItem_id"]) && !empty($_POST["removeItem_id"]) && is_numeric($_POST["removeItem_id"])){
        http_response_code(200);

        unset($_SESSION["cart"][$_POST["removeItem_id"]]);

        $message= "Item removido com sucesso";
       
    }
    else{
        http_response_code(405);
        $message= "Not allowed";
        $title= "Error";
        require("views/view.error.php");
    }
    require("views/view.cart.php");

?>