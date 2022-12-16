<?php
//form to edit products with input id from list_products.php
require __DIR__ . "/../../partials/nav.php";
//fetch product info from database based on id
$db = getDB();
$stmt = $db->prepare("SELECT * FROM Products WHERE id = :id");
$r = $stmt->execute([":id" => $_GET["id"]]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>
 <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php safer_echo($product["title"]); ?></h5>
        <p class="card-text"><?php safer_echo($product["description"]); ?></p>
        <p class="card-text">Category: <?php safer_echo($product["category"]); ?></p>
        <p class="card-text">$<?php safer_echo($product["price"]); ?></p>
        <p class="card-text">Stock: <?php safer_echo($product["quantity"]); ?></p>
    </div>
    <!-- if admin is logged in, show edit button -->
    <?php if (has_role("Admin")) : ?>
        <div class="card-footer">
            <a href="admin/edit_products.php?
                id=<?php safer_echo($r['id']); ?>" class="btn btn-primary">Edit</a>
        </div>
    <?php endif; ?>
    
</div>