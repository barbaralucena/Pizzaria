<?php
require_once("models/model.base.php");
class Categories extends Base{
    public function getCategories(){
        $query = $this->db->prepare("
            SELECT
                category_id, name
            FROM
                categories
        ");
        $query-> execute();
        return $query-> fetchAll();
    }
   
}