<?php
require __DIR__ . "/../../partials/nav.php";
?>
<!-- display the order by getting the order id from the url -->
<div class="container">
    <h3>Order</h3>
    <?php
    //fetch all products from cart
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM Orders WHERE id = :id");
    $stmt->execute([":id" => $_GET["id"]]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <!-- show order details like address and items purchased from Order table and OrderItems table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title
                    ">Order Details</h5>
                    <p class="card-text">Order ID: <?php safer_echo($r["id"]); ?></p>
                    <p class="card-text">First Name: <?php safer_echo($r["first_name"]); ?></p>
                    <p class="card-text">Last Name: <?php safer_echo($r["last_name"]); ?></p>
                    <p class="card-text">Address: <?php safer_echo($r["address"]); ?></p>
                    <p class="card-text">Payment Method: <?php safer_echo($r["payment_method"]); ?></p>
                    <p class="card-text">Total: <?php safer_echo($r["total_price"]); ?></p>
                </div>
            </div>
        </div>
    </div>
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
                    <!-- fetch product names -->
                    <?php
                    $stmt = $db->prepare("SELECT * FROM OrderItems WHERE order_id = :id");
                    $stmt->execute([":id" => $_GET["id"]]);
                    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($r as $item) {
                        ?>
                        <?php
                        $total = $item["quantity"] * $item["unit_price"];
                        //fetch product names
                        $stmt = $db->prepare("SELECT * FROM Products WHERE id = :id");
                        $stmt->execute([":id" => $item["product_id"]]);
                        $r = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <tr>
                            <td><?php safer_echo($r["name"]); ?></td>
                            <td><?php safer_echo($item["quantity"]); ?></td>
                            <td><?php safer_echo($item["unit_price"]); ?></td>
                            <td><?php safer_echo($total); ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>