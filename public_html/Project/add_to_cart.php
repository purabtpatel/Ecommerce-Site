<?php
require(__DIR__ . "/../../partials/nav.php");
if (isset($_GET["id"]) && isset($_GET["quantity"])) {

    if (!is_logged_in()) {
        flash("You must be logged in to add items to your cart");
        die(header("Location: login.php"));
    }
    $id = $_GET["id"];
    $db = getDB();
    //check if product is in cart
    $stmt = $db->prepare("SELECT * FROM Cart WHERE product_id = :id AND user_id = :user_id");
    $r = $stmt->execute([":id" => $id, ":user_id" => get_user_id()]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //log out result
    if ($result) {
        if ($_GET["quantity"] == 0) {
            $stmt = $db->prepare("DELETE FROM Cart WHERE product_id = :id AND user_id = :user_id");
            $r = $stmt->execute([":id" => $id, ":user_id" => get_user_id()]);
            if ($r) {
                flash("Removed from cart");
                die(header("Location: ViewCart.php"));
            } else {
                flash("Error removing from cart");
            }
        } else {
            $stmt = $db->prepare("UPDATE Cart set desired_quantity = :desired_quantity where product_id = :id");
            $r = $stmt->execute([":id" => $id, ":desired_quantity" => $_GET["quantity"]]);
            if ($r) {
                flash("Added to cart");
                die(header("Location: ViewCart.php"));
            } else {
                flash("Error adding to cart");
            }
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
            ":desired_quantity" => $_GET["quantity"],
            ":unit_price" => $result["unit_price"]
        ]);
        if ($r) {
            flash("Added to cart");
            die(header("Location: ViewCart.php"));
        } else {
            flash("Error adding to cart");
        }
    }
} else if (isset($_GET["id"]) && !isset($_GET["quantity"])) {

    if (!is_logged_in()) {
        flash("You must be logged in to add items to your cart");
        die(header("Location: login.php"));
    }
    $id = $_GET["id"];
    $db = getDB();
    //check if product is in cart
    $stmt = $db->prepare("SELECT * FROM Cart WHERE product_id = :id AND user_id = :user_id");
    $r = $stmt->execute([":id" => $id, ":user_id" => get_user_id()]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //log out result
    if ($result) {
        //add one
        $stmt = $db->prepare("UPDATE Cart set desired_quantity = desired_quantity + 1 where product_id = :id");
        $r = $stmt->execute([":id" => $id]);
        if ($r) {
            flash("Added to cart");
            die(header("Location: ViewCart.php"));
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
            flash("Added to cart");
            die(header("Location: ViewCart.php"));
        } else {
            flash("Error adding to cart");
        }
    }
}

require(__DIR__ . "/../../partials/flash.php");
