<?php

class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public  function insertIntoCart($params = null, $table = "cart_items"){
        if ($this->db->con != null){
            if ($params != null){
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    public function addToCart($POST, $userid, $productid, $quantity){
        $this->db->con->query("INSERT INTO cart_items (user_id, product_id, quantity, created_at, modified_at) VALUES ('".$userid."', '".$productid."', '".$quantity."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
    }

    public function deleteCart($POST, $item_id){
        $this->db->con->query("DELETE FROM cart_items WHERE cart_id='".$item_id."'");
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    public function getCartId($cartArray = null, $key = "product_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

}