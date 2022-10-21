<?php
    require("layout/view.header.php"); 
    
    if(!empty($_SESSION["cart"])){
        ?>
                <table>
                    <caption>No carrinho</caption>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Subtotal</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
        <?php
            $total= 0;
            foreach($_SESSION["cart"] as $product){
                echo '
                    <tr>
                        <td>'.$product["name"].'</td>
                        <td>
                            <input 
                                type="number" 
                                class="change-quantity" 
                                value="'.$product["quantity"].'" 
                                min="1" 
                                max="10"
                            >
                        </td>
                        <td>'.$product["price"].'€</td>
                        <td>'.($product["price"]*$product["quantity"]).'€</td>
                        <td>
                            <button type="button" class="removeItemCart" data-product_id="'.$product["product_id"].'"><i class="fa-regular fa-x"></i></button>
                        </td>
                    </tr>
                ';
                $total= $total+ ($product["price"]*$product["quantity"]);
            }     
        ?>                  
                        <tr>
                            <td colspan="3">Total</td>
                            <td colspan="2"><?php echo $total;?>€</td>
                        </tr>
                    </tbody>
                </table>
                <div">
                    <a href="/checkout">Encomendar</a>
                </div>
        <?php
    }
    else{
        echo '<p role="alert">Não selecionou nenhum produto</p>';
    }
    require("layout/view.footer.php"); 
?>