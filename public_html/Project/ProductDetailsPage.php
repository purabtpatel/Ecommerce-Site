<?php
//form to edit products with input id from list_products.php
require __DIR__ . "/../../partials/nav.php";

$name = $_GET["name"];
$description = $_GET["description"];
$category = $_GET["category"];
$unit_price = $_GET["unit_price"];
$stock = $_GET["stock"];
?>
 <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php safer_echo($name); ?></h5>
        <p class="card-text"><?php safer_echo($description); ?></p>
        <p class="card-text">Category: <?php safer_echo($category); ?></p>
        <p class="card-text">$<?php safer_echo($unit_price); ?></p>
        <p class="card-text">Stock: <?php safer_echo($stock); ?></p>
    </div>
    <!-- if admin is logged in, show edit button -->
    <?php if (has_role("Admin")) : ?>
        <div class="card-footer">
            <a href="admin/edit_products.php?
                id=<?php safer_echo($r['id']); ?>&
                name=<?php safer_echo($r['name']) ?>&
                description=<?php safer_echo($r['description']) ?>&
                category=<?php safer_echo($r['category']) ?>&
                unit_price=<?php safer_echo($r['unit_price']) ?>&
                stock=<?php safer_echo($r['stock']) ?>&
                visibility=<?php safer_echo($r['visibility']) ?>" class="btn btn-primary">Edit</a>
        </div>
    <?php endif; ?>
    
</div>