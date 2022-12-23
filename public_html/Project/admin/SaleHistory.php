<?php
require(__DIR__ . "/../../../partials/nav.php");
if(!is_logged_in()){
    redirect("/login.php");
}
if(!has_role("Admin") && !has_role("Shop Owner")){
    flash("You don't have permission to access this page");
    die(header("Location: login.php"));
}
?>
<!-- display list of orders current user has made -->
<div class="container">
    <h3>Sales</h3>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">View Order</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- fetch order ids -->
                    <?php
                    $db = getDB();
                    $stmt = $db->prepare("SELECT * FROM Orders");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $r) {
                        //fetch username from user id
                        $stmt = $db->prepare("SELECT username FROM Users WHERE id = :id");
                        $stmt->execute([":id" => $r["user_id"]]);
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo "<tr><td>" . $r["id"] . "</td><td>" . $user["username"] . "</td><td>" . $r["total_price"] . "</td><td>" . $r["created"] . "</td><td><a type=\"button\" href=\"ViewSale.php?id=" . $r["id"] . "\" class=\"btn btn-primary\">View Order</a></td></tr>";
                        
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



