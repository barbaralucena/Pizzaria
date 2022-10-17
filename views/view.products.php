<?php
    require("layout/view.header.php");
?>
    <div class="product-page">
        <?php
        echo '
            <h1 class="product-title">'.$products["name"].'</h1>
            <img src="'.$products["image"].'"></img>
            <p>'.$products["description"].'</p>
            <p>'.$products["price"].'€</p>
           
        '; 
?>
        <button type="submit" name="send">Pedir</button>
    </div>  
           
    
<?php
 require("layout/view.footer.php")
 ?>

    