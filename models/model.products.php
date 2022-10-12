<?php
require_once("models/model.base.php");

class Products extends Base {
    public function getProducts($category_id){
        $query = $this->db->prepare("
            SELECT 
                product_id, name, image, price
            FROM 
                products
            WHERE 
                category_id= ?
        ");
    $query->execute([$category_id]);
    return $query->fetchAll();
    }
    
    public function getProduct($id){
        $query=$this->db->prepare("
            SELECT product_id, name, description, price, image
            FROM products
            WHERE product_id= ?
        ");
        $query-> execute([$id]);
         return $query-> fetch();

    }

}
?>

