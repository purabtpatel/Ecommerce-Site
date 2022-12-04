<?php
require(__DIR__ . "/../../partials/nav.php");

//check if signed in


if (isset($_GET["id"])) {
    if (!is_logged_in()) {
        flash("You must be logged in to add items to your cart");
        die(header("Location: login.php"));
    }
    $id = $_GET["id"];
    $db = getDB();
    //check if product is in cart
    $stmt = $db->prepare("SELECT * FROM Cart WHERE product_id = :id AND user_id = :user_id");
    $r = $stmt->execute([":id" => $id]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //log out result
    if ($result) {
        $stmt = $db->prepare("UPDATE Cart set desired_quantity = desired_quantity + 1 where product_id = :id");
        $r = $stmt->execute([":id" => $id]);
        if ($r) {
            die(header("Location: ViewCart.php"));
            flash("Added one to cart");
        } else {
            flash("Error adding to cart");
        }
    } else {
        //get product info
        $stmt = $db->prepare("SELECT * FROM Products where id = :id");  
        $r = $stmt->execute([":id" => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $stmt = $db->prepare("INSERT INTO Cart (user_id, product_id, desired_quantity, unit_price) VALUES(:user_id, :product_id, :desired_quantity, :unit_price)");
        $r = $stmt->execute([
            ":user_id" => get_user_id(),
            ":product_id" => $id,
            ":desired_quantity" => 1,
            ":unit_price" => $result["unit_price"]
        ]);
        if ($r) {
            die(header("Location: ViewCart.php"));
            flash("Added to cart");
        } else {
            flash("Error adding to cart");
        }
    }
    
}


//display the cart of user
$db = getDB();
$stmt = $db->prepare("SELECT * FROM Cart WHERE user_id = :user_id");
$r = $stmt->execute([":user_id" => get_user_id()]);
$e = $stmt->errorInfo();
if ($e[0] != "00000") {
    flash(var_export($e, true), "alert");
}
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//fetch and store names of each product in cart
$names;
foreach ($results as $r) {
    $stmt = $db->prepare("SELECT name FROM Products WHERE id = :id");
    $r2 = $stmt->execute([":id" => $r["product_id"]]);
    $e = $stmt->errorInfo();
    if ($e[0] != "00000") {
        flash(var_export($e, true), "alert");
    }
    $name = $stmt->fetch(PDO::FETCH_ASSOC);
    $names[$r["product_id"]] = $name["name"];
}


?>
<div class="container-fluid">
    <h3>Cart</h3>
    <!-- clear cart button -->
    <form method="POST">
        <input type="submit" name="clear" value="Clear Cart"/>
    </form>
    <?php if (isset($_POST["clear"])) {
        $stmt = $db->prepare("DELETE FROM Cart WHERE user_id = :user_id");
        $r = $stmt->execute([":user_id" => get_user_id()]);
        $e = $stmt->errorInfo();
       
        flash("Cart Cleared");
        die(header("Location: ViewCart.php"));
    } ?>
    <div class="list-group">
        <?php if (count($results) > 0) : ?>
            <?php foreach ($results as $r) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div>Product: <?php safer_echo($names[$r["product_id"]]); ?></div>
                            <div>Quantity: <?php safer_echo($r["desired_quantity"]); ?></div>
                            <div>Total Cost: <?php safer_echo($r["unit_price"]); ?></div>
                        </div>
                        <form method="POST">
                            <input type="number" name="quantity" placeholder="<?php safer_echo($r["desired_quantity"]); ?>" />
                            <input type="submit" name="updateQuantity" value="Update" />
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php elseif (is_logged_in()) : ?>
            <p>No results</p>
        <?php else : ?>
            <p>Sign in to view cart</p>
        <?php endif; ?>
    </div>
</div>

<?php
if (isset($_POST["updateQuantity"])) {
    $quantity = $_POST["quantity"];
    $id = $r["id"];
    $db = getDB();
    if ($quantity > 0) {
        $stmt = $db->prepare("UPDATE Cart SET desired_quantity = :desired_quantity WHERE id = :id");
        flash($quantity);
        $r = $stmt->execute([
            
            ":desired_quantity" => $quantity,
            ":id" => $id
        ]);
        if ($r) {
            flash("Updated quantity");
        } else {
            flash("Error updating quantity");
        }
    } else if ($quantity == 0) {
        $stmt = $db->prepare("DELETE FROM Cart WHERE id = :id");
        $r = $stmt->execute([
            ":id" => $id
        ]);
        if ($r) {
            flash("Removed from cart");
        } else {
            flash("Error removing from cart");
        }
    } else {
        flash("Quantity must be greater than 0");
    }
}
require(__DIR__ . "/../../partials/flash.php");
?>