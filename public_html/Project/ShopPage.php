<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<!-- show all Products from products table with visibility of true-->

<div class="container-fluid">
    <h1>Home</h1>
    <div class="list-group">
        <?php
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1");
        $r = $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $row) {
            echo "<div class='list-group-item'>";
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<div>Name: " . $row["name"] . "</div>";
            echo "<div>Description: " . $row["description"] . "</div>";
            echo "<div>Category: " . $row["category"] . "</div>";
            echo "<div>Unit Price: " . $row["unit_price"] . "</div>";
            echo "<div>Stock: " . $row["stock"] . "</div>";
            echo "</div>";
            echo "<div class='col'>";
            echo "<a type='button' href='edit_product.php?id=" . $row["id"] . "' class='btn btn-primary'>Edit</a>";
            echo "<a type='button' href='delete_product.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<?php
require(__DIR__."/../../partials/flash.php");
?>