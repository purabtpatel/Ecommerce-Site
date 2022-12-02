<?php
require __DIR__ . "/../../../partials/nav.php";
if (!has_role("Admin") && !has_role("Shop Owner")) {
    flash("You don't have permission to access this page");
    die(header("Location: login.php"));
}

//list all products from the database
$db = getDB();
$stmt = $db->prepare("SELECT * FROM Products ORDER BY id DESC");
$r = $stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container-fluid">
    <h1>Products</h1>
    <div class="row">
        <?php foreach ($results as $r) : ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php safer_echo($r["name"]); ?></h5>
                        <p class="card-text"><?php safer_echo($r["description"]); ?></p>
                        <p class="card-text">Category: <?php safer_echo($r["category"]); ?></p>
                        <p class="card-text">$<?php safer_echo($r["unit_price"]); ?></p>
                        <p class="card-text">Stock: <?php safer_echo($r["stock"]); ?></p>
                        <p class="card-text">Visibility: <?php safer_echo($r["visibility"]); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="ViewCart.php?id=<?php safer_echo($r["id"]); ?>" class="btn btn-primary">Add to Cart</a>
                        <?php if (has_role("Admin")) : ?>
                            <!-- pass in all of current products details to edit_products.php-->
                            <a href="edit_products.php?
                                id=<?php safer_echo($r['id']); ?>&
                                name=<?php safer_echo($r['name']) ?>&
                                description=<?php safer_echo($r['description']) ?>&
                                category=<?php safer_echo($r['category']) ?>&
                                unit_price=<?php safer_echo($r['unit_price']) ?>&
                                stock=<?php safer_echo($r['stock']) ?>&
                                visibility=<?php safer_echo($r['visibility']) ?>" class="btn btn-primary">Edit</a>
                        <?php endif; ?>
                        <a href="productDetailsPage.php?
                                id=<?php safer_echo($r['id']); ?>&
                                name=<?php safer_echo($r['name']) ?>&
                                description=<?php safer_echo($r['description']) ?>&
                                category=<?php safer_echo($r['category']) ?>&
                                unit_price=<?php safer_echo($r['unit_price']) ?>&
                                stock=<?php safer_echo($r['stock']) ?>" class="btn btn-primary">View</a>
                                
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../../partials/flash.php");
?>