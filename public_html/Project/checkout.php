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
        $stmt = $db->prepare("SELECT unit_price FROM Products WHERE id = :id");
        $r2 = $stmt->execute([":id" => $r["product_id"]]);
        $price = $stmt->fetch(PDO::FETCH_ASSOC);
        array_push($prices, $price["unit_price"]);
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
                    <?php //setup counter to keep track of which price to use 
                    $i = 0;
                    $total = 0.00;
                    $item_total = 0.00;
                    ?>

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
                            <?php if ($r["unit_price"] != $prices[$i]) : ?>
                                <?php $total += $r["desired_quantity"] * $prices[$i]; ?>
                                <?php $item_total = $r["desired_quantity"] * $prices[$i]; ?>
                                <?php $change = ($prices[$i] - $r["unit_price"] ) / $prices[$i] * 100; ?>
                                <span class="badge badge-success"><?php safer_echo($change); ?>%</span>
                                <span class="badge badge-danger">($<?php safer_echo($prices[$i])?>)</span>
                                <?php $i++; ?>
                            <?php else : ?>
                                <?php $total += $r["desired_quantity"] * $r["unit_price"]; ?>
                                <?php $item_total = $r["desired_quantity"] * $r["unit_price"]; ?>

                                <?php $i++; ?>
                            <?php endif; ?>
                            
                            </td>
                            <td>$<?php safer_echo($item_total); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- display total price using prices from products table -->
            
            <div class="row">
                <div class="col">
                    <h4>Total: <?php safer_echo($total); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout form -->
    
</div>
<div class="container">
    <form method="POST" onsubmit="return validate(this);">
        <div class="form-group row">
            <label for="money_received" class="col-sm-2 col-form-label">Money Received</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="money_received" name="money_received" placeholder="Money Received" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_address" class="col-sm-2 col-form-label">Shipping Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="shipping_address" name="shipping_address" placeholder="Shipping Address" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_city" class="col-sm-2 col-form-label">Shipping City</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="shipping_city" name="shipping_city" placeholder="Shipping City" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_state" class="col-sm-2 col-form-label">Shipping State</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="shipping_state" name="shipping_state" placeholder="Shipping State" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_zip" class="col-sm-2 col-form-label">Shipping Zip</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="shipping_zip" name="shipping_zip" placeholder="Shipping Zip" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="shipping_country" class="col-sm-2 col-form-label">Shipping Country</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="shipping_country" name="shipping_country" placeholder="Shipping Country" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="payment_method" class="col-sm-2 col-form-label">Payment Method</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="payment_method" name="payment_method" placeholder="Payment Method" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Checkout</button>
            </div>
        </div>
    </form>
</div>


<script>
    function validate(form) {
        //check if payment amount is greater than total
        if (form.money_received.value < <?php safer_echo($total); ?>) {
            alert("Payment amount is less than total");
            return false;
        }
        return true;
    }
</script>
<?php 
if(isset($_POST["money_received"]) && isset($_POST["shipping_address"]) && isset($_POST["shipping_city"]) && isset($_POST["shipping_state"]) && isset($_POST["shipping_zip"]) && isset($_POST["shipping_country"]) && isset($_POST["payment_method"]) && isset($_POST["first_name"]) && isset($_POST["last_name"])){
    //concat shipping address into one string
    $shipping_address = $_POST["shipping_address"] . ", " . $_POST["shipping_city"] . ", " . $_POST["shipping_state"] . ", " . $_POST["shipping_zip"] . ", " . $_POST["shipping_country"];
    //check if there is enough stock for each item in cart
    $bool = true;
    foreach($results as $r){
        $stmt = $db->prepare("SELECT stock FROM Products WHERE id = :id");
        $r2 = $stmt->execute([":id" => $r["product_id"]]);
        $stock = $stmt->fetch(PDO::FETCH_ASSOC);
        if($r["desired_quantity"] > $stock["stock"]){
            //get name of product
            $stmt = $db->prepare("SELECT name FROM Products WHERE id = :id");
            $r2 = $stmt->execute([":id" => $r["product_id"]]);
            $r = $stmt->fetch(PDO::FETCH_ASSOC);

            flash("Not enough stock for " . $r["name"] . " only " . $stock["stock"] . " left");
            $bool = false;
        }
    }
    
    //die(header("Location: ViewCart.php"));
    
    flash($shipping_address);
    flash($_POST["payment_method"]);
    flash($_POST["money_received"]);
    flash($_POST["first_name"]);
    flash($_POST["last_name"]);
    //convert total to decimal
    $total = number_format((float)$total, 2, '.', '');
    flash($total);

    
    //if there is enough stock for each item in cart
    if($bool){
        //create order
        $stmt = $db->prepare("INSERT INTO Orders (user_id, shipping_address, payment_method, payment_amount, first_name, last_name) VALUES (:user_id, :shipping_address, :payment_method, :payment_amount, :first_name, :last_name)");
        $r = $stmt->execute([
            ":user_id" => get_user_id(),
            ":shipping_address" => $shipping_address,
            ":payment_method" => $_POST["payment_method"],
            ":payment_amount" => $_POST["money_received"],
            ":first_name" => $_POST["first_name"],
            ":last_name" => $_POST["last_name"]
        ]);
        //get order id
        $stmt = $db->prepare("SELECT id FROM Orders WHERE user_id = :user_id AND shipping_address = :shipping_address AND payment_method = :payment_method AND payment_amount = :payment_amount AND first_name = :first_name AND last_name = :last_name");
        $r = $stmt->execute([
            ":user_id" => get_user_id(),
            ":shipping_address" => $shipping_address,
            ":payment_method" => $_POST["payment_method"],
            ":payment_amount" => $_POST["money_received"],
            ":first_name" => $_POST["first_name"],
            ":last_name" => $_POST["last_name"]
        ]);
        $order_id = $stmt->fetch(PDO::FETCH_ASSOC);
        //create order items
        foreach($results as $r){
            $stmt = $db->prepare("INSERT INTO OrderItems (order_id, product_id, quantity) VALUES (:order_id, :product_id, :quantity)");
            $r = $stmt->execute([
                ":order_id" => $order_id["id"],
                ":product_id" => $r["product_id"],
                ":quantity" => $r["desired_quantity"]
            ]);
            //update stock
            $stmt = $db->prepare("UPDATE Products SET stock = stock - :quantity WHERE id = :id");
            $r = $stmt->execute([
                ":quantity" => $r["desired_quantity"],
                ":id" => $r["product_id"]
            ]);
        }
        //delete cart
        $stmt = $db->prepare("DELETE FROM Carts WHERE user_id = :user_id");
        $r = $stmt->execute([
            ":user_id" => get_user_id()
        ]);
        //redirect to order page
        die(header("Location: ViewOrder.php?id=" . $order_id["id"]));

    } else {
        //redirect to cart page
        die(header("Location: ViewCart.php"));
    }
?>
<?php require(__DIR__ . "/partials/flash.php");?>

