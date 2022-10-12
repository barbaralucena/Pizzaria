<?php
    require("layout/header.php");
        echo '
            <div class="product-container">
                <h1>'.$products["name"].'</h1>
                <img>'.$products["image"].'</img>
                <p>'.$products["description"].'</p>
                <p>'.$products["price"].'</p>
            </div>  
        ';          
?>
<?php require("layout/view.footer.php")?>

    