<?php 

include('conn.php'); 
$query = "SELECT * FROM product ORDER BY id DESC";
$statement = $connect->prepare($query);
if($statement->execute()) {
    $result = $statement->fetchAll();
    $output = '';
    foreach($result as $row) {
        $output .= '<div class="col-sm-3">
        <div class="card-pro" id="product_'. $row["id"] .'">
            <img class="card-img-top img-responsive" src="./assets/img/'. $row["image"] .'" alt="Card image cap">
                <h5 class="card-title">'. $row["name"] .'</h5>
                <span class="price">$'. $row["price"] .'</span>
                <p class="card-text">'. $row["desc"] .'</p>
                <div class="checkbox">
                    <input type="checkbox" class="select_product" data-product_id="'.$row["id"].'" data-product_name="'.$row["name"].'" data-product_price="'.$row["price"].'" value="">
                </div>
        </div>
    </div>';
    }
    echo $output;
}

?>