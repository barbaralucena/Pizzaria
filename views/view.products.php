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
 <form method="post" action="/cart">
                    <div>
                        <label>
                            Quantidade
                            <input 
                                type="number" 
                                name="quantity" 
                                min="1" 
                                max="10" 
                                value="1" 
                                required>
                        </label>
                        <input 
                            type="hidden" 
                            name="product_id" 
                            value="<?= $product["product_id"];?>"
                        >
                        <button type="submit" name="send">Adicionar</button>
                    </div>
                </form>
    </div>  
           
    
<?php
 require("layout/view.footer.php")
 ?>

    