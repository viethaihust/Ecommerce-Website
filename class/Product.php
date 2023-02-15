<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getData($table){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getProductData(){
        $result = $this->db->con->query("SELECT * FROM products");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getCartData(){
        $result = $this->db->con->query("SELECT * FROM products INNER JOIN cart_items ON cart_items.product_id = products.id");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getItemRating($itemId){
        $result = $this->db->con->query("SELECT * FROM product_rating as r INNER JOIN user as u ON (r.userId = u.id) WHERE r.productId = '".$itemId."'");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getRatingAverage($itemId){
		$itemRating = $this->getItemRating($itemId);
		$ratingNumber = 0;
		$count = 0;		
		foreach($itemRating as $itemRatingDetails){
			$ratingNumber+= $itemRatingDetails['ratingNumber'];
			$count += 1;			
		}
		$average = 0;
		if($ratingNumber && $count) {
			$average = $ratingNumber/$count;
		}
		return $average;	
	}

    public function saveRating($POST, $userID){		
		$this->db->con->query("INSERT INTO product_rating (productId, userId, ratingNumber, comments, created, modified) VALUES ('".$POST['itemId']."', '".$userID."', '".$POST['rating']."', '".$POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
	}
}