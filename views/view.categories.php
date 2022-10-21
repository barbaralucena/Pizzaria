<?php
    require("layout/view.header.php");

    foreach($products as $product){
        echo '
        <div class="card">
        <a href="/products/'.$product["product_id"].'">
                <img src="'.$product["image"].'">
                <h2>'.$product["name"].'</h2>
                <p>'.$product["price"].'€</p>
        </a>
        </div>
        ';

    }
    require("layout/view.footer.php")
?>
