<?php
require __DIR__ . "/../../partials/nav.php";
?>
<!-- display all Products from user's cart with button to add more, and button to clear cart -->
<div class="container">
    <h3>Cart</h3>
    <?php
    //fetch all products from cart
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM Cart WHERE user_id = :user_id");
    $r = $stmt->execute([":user_id" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $r) : ?>
                        <!-- fetch product names -->
                        <?php
                        $stmt = $db->prepare("SELECT name FROM Products WHERE id = :id");
                        $r2 = $stmt->execute([":id" => $r["product_id"]]);
                        $prodname = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <tr>
                            <td><?php safer_echo($prodname["name"]); ?></td>
                            <td><?php safer_echo($r["desired_quantity"]); ?></td>
                            <td><?php safer_echo($r["unit_price"]); ?></td>
                            <td><?php safer_echo($r["desired_quantity"] * $r["unit_price"]); ?></td>
                            <td>
                                <a type="button" href="add_to_cart.php?id=<?php safer_echo($r['product_id']); ?>&quantity=<?php safer_echo($r['desired_quantity'] + 1); ?>">Add</a>
                                <a type="button" href="add_to_cart.php?id=<?php safer_echo($r['product_id']); ?>&quantity=<?php safer_echo($r['desired_quantity'] - 1); ?>">Remove</a>
                                <a type="button" href="add_to_cart.php?id=<?php safer_echo($r['product_id']); ?>&quantity=0">Clear</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- button to checkout or clear cart-->
    <div class="row">
        <div class="col">
            <button onclick="<?php flash("Hello")?>" class="btn btn-primary">Checkout</button>
        </div>
        <div class="col">
            <a type="button" class="btn btn-primary" href="clear_cart.php">Clear Cart</a>
        </div>
    </div>
    <?php
    require __DIR__ . "/../../partials/flash.php";
    ?>