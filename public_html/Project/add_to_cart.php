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
        //if product is not in cart, add it
        $query = "INSERT INTO Cart (product_id, user_id, quantity) VALUES (:id, :user_id, 1)";
        $stmt = $db->prepare($query);
        $r = $stmt->execute([":id"=>$id, ":user_id"=>get_user_id()]);
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