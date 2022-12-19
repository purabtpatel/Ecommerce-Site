<?php
require __DIR__ . "/../../partials/nav.php";
if(!is_logged_in()){
    redirect("/login.php");
}
?>
<!-- display list of orders current user has made -->
<div class="container">
    <h3>Order History</h3>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">View Order</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- fetch order ids -->
                    <?php
                    $db = getDB();
                    $stmt = $db->prepare("SELECT * FROM Orders WHERE user_id = :id");
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $r) {
                        echo "<tr><td>" . $r["id"] . "</td><td>" . $r["total_price"] . "</td><td>" . $r["created"] . "</td><td><a type=\"button\" href=\"ViewOrder.php?id=" . $r["id"] . "&new=0\" class=\"btn btn-primary\">View Order</a></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
