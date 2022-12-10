<?php 
if(isset($_GET["id"])){
    $id = $_GET["id"];
    //check if product is in cart already
    $query = "SELECT * FROM Cart WHERE product_id = :id AND user_id = :user_id";
    $stmt = $db->prepare($query);
    $r = $stmt->execute([":id"=>$id, ":user_id"=>get_user_id()]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result){
        //if product is in cart already, update quantity
        $query = "UPDATE Cart SET quantity = quantity + 1 WHERE product_id = :id AND user_id = :user_id";
        $stmt = $db->prepare($query);
        $r = $stmt->execute([":id"=>$id, ":user_id"=>get_user_id()]);
    }
    else{
        //fetch product details then add to cart
        $query = "SELECT * FROM Products WHERE id = :id";
        $stmt = $db->prepare($query);
        $r = $stmt->execute([":id"=>$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $query = "INSERT INTO Cart (product_id, user_id, desired_quantity, unit_price) VALUES (:product_id, :user_id, :desired_quantity, :unit_price)";
        $stmt = $db->prepare($query);
        $r = $stmt->execute([":product_id"=>$result["id"], ":user_id"=>get_user_id(), ":desired_quantity"=>1, ":unit_price"=>$result["unit_price"]]);

    }
    if($r){
        flash("Product added to cart");
    }
    else{
        flash("Error adding product to cart");
    }
}
else{
    flash("Error adding product to cart");
}
//redirect to cart
header("Location: ViewCart.php");