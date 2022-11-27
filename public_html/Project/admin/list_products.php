<?php 
require __DIR__ . "/../partials/nav.php";
if(!has_role("Admin") && !has_role("Shop Owner")){
    flash("You don't have permission to access this page");
    die(header("Location: login.php"));
}

//list all products from the database
$db = getDB();
$stmt = $db->prepare("SELECT * FROM Products ORDER BY id DESC");
$r = $stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Products</h1>
<div class="row">
        <?php foreach ($results as $r): ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php safer_echo($r["name"]); ?></h5>
                        <p class="card-text"><?php safer_echo($r["description"]); ?></p>
                        <p class="card-text">$<?php safer_echo($r["unit_price"]); ?></p>
                        <p class="card-text">Stock: <?php safer_echo($r["stock"]); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="ViewCart.php?id=<?php safer_echo($r["id"]); ?>" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__."/../../partials/flash.php");
?>