<?php
    require("models/model.base.php");

    class Orders extends Base{
        public function create($user_id){
            $query= $this-> db-> prepare("
                INSERT INTO orders
                (user_id)
                VALUES(?)
            ");

            $query-> execute([
                $user_id
            ]);

            return $this-> db-> lastInsertId();
        }

        public function createDetail($data){
            $query= $this-> db-> prepare("
                INSERT INTO orderdetails
                (order_id, product_id, quantity, price_each)
                VALUES(?, ?, ?, ?)
            ");

            $query-> execute([
                $data["order_id"],
                $data["product_id"],
                $data["quantity"],
                $data["price"]
            ]);
        }
    }
?>