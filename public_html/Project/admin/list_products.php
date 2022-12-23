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
    <!-- filter for out of stock products -->
    <form method="POST">
        <div class="form-group">
            <label for="stock">Filter by Stock</label>
            <select class="form-control" id="stock" name="stock">
                <option value="0">All</option>
                <option value="1">In Stock</option>
                <option value="2">Out of Stock</option>
            </select>
        </div>
        <input class="btn btn-primary" type="submit" name="search" value="Search"/>
    </form>
    <?php
    if (isset($_POST["search"])) {
        $stock = $_POST["stock"];
        if ($stock == 1) {
            $stmt = $db->prepare("SELECT * FROM Products WHERE stock > 0 ORDER BY id DESC");
            $r = $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else if ($stock == 2) {
            $stmt = $db->prepare("SELECT * FROM Products WHERE stock = 0 ORDER BY id DESC");
            $r = $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    ?>

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
                        <a href="./../ProductDetailsPage.php?
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