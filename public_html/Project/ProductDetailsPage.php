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
</div>