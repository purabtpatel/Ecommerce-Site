<?php
require(__DIR__ . "/../../partials/nav.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM Products where id = :id");
    $r = $stmt->execute([":id" => $id]);
    $e = $stmt->errorInfo();
    if ($e[0] != "00000") {
        flash(var_export($e, true), "alert");
    }
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        flash("No results found");
    }
    //add to cart of current user
    $stmt = $db->prepare("INSERT INTO Cart (user_id, product_id, desired_quantity, unit_price) VALUES(:user_id, :product_id, :desired_quantity, :unit_price)");
    $r = $stmt->execute([
        ":user_id" => get_user_id(),
        ":product_id" => $id,
        ":desired_quantity" => 1,
        ":unit_price" => $result["unit_price"]
    ]);
    if ($r) {
        flash("Added to cart");
    } else {
        flash("Error adding to cart");
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
    <div class="list-group">
        <?php if (count($results) > 0) : ?>
            <?php foreach ($results as $r) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div>Product: <?php safer_echo($names[$r["product_id"]]); ?></div>
                            <div>Quantity: <?php safer_echo($r["desired_quantity"]); ?></div>
                            <div>Price: <?php safer_echo($r["unit_price"]); ?></div>
                        </div>
                        <div>
                            <a type="button" href="edit_cart.php?id=<?php safer_echo($r['id']); ?>">Edit</a>
                            <a type="button" href="view_cart.php?id=<?php safer_echo($r['id']); ?>">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No results</p>
        <?php endif; ?>
    </div>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>