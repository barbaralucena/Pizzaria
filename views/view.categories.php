<?php
    require("layout/view.header.php");

    foreach($products as $product){
        echo '
        <section style="border: 10px solid #000">
        <a href="/products/'.$product["product_id"].'">
                <img src="'.$product["image"].'">
                <h2>'.$product["name"].'</h2>
                <p>'.$product["price"].'€</p>
        </a>
        </section>
        ';

    }

    require("layout/view.footer.php")
?>
