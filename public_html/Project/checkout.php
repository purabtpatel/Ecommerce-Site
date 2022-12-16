<!-- Show the items pending purchase
Item name, desired quantity, unit_cost, subtotal
If Cart.unit_cost differs from Products.unit_cost display a % change to the user
Show the total purchase price
Hint: This should be similar to Cart but without the interactions to adjust quantity or remove items
Include a link back to Cart -->

<?php
require __DIR__ . "/../../partials/nav.php";
?>
<div class="container">
    <h3>Checkout</h3>
    <?php
    //fetch all products from cart
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM Cart WHERE user_id = :user_id");
    $r = $stmt->execute([":user_id" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //fetch prices of products in cart from products table
    //record each price in an array
    $prices = [];
    foreach ($results as $r) {
        $stmt = $db->prepare("SELECT price FROM Products WHERE id = :id");
        $r2 = $stmt->execute([":id" => $r["product_id"]]);
        $price = $stmt->fetch(PDO::FETCH_ASSOC);
        array_push($prices, $price["price"]);
    }

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
                            <td><?php safer_echo($r["unit_price"]); ?> 
                            <!-- if price from products table is different from price in cart, display a % change -->
                            <?php if ($r["unit_price"] != $prices[$r["product_id"] - 1]) : ?>
                                <?php
                                $change = ($r["unit_price"] - $prices[$r["product_id"] - 1]) / $prices[$r["product_id"] - 1] * 100;
                                ?>
                                <span class="badge badge-danger"> <?php safer_echo($change); ?>% change</span>
                            <?php endif; ?>
                            </td>
                            <td><?php safer_echo($r["desired_quantity"] * $r["unit_price"]); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- display total price -->
            <?php
            $stmt = $db->prepare("SELECT SUM(desired_quantity * unit_price) as total FROM Cart WHERE user_id = :user_id");
            $r = $stmt->execute([":user_id" => get_user_id()]);
            $total = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="row">
                <div class="col">
                    <h4>Total: <?php safer_echo($total["total"]); ?></h4>
                </div>
            </div>
        </div>
    </div>


</div>
