<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<!-- show all Products from products table with visibility of true-->

<div class="container-fluid">
    <h1>Shop</h1>
    <!-- filter by category, price, and name -->
    <form method="GET">
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                <option value="All">All</option>
                <option value="Food">Food</option>
                <option value="Clothing">Clothing</option>
                <option value="Electronics">Electronics</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <select class="form-control" id="price" name="price">
                <option value="All">All</option>
                <option value="0-10">$0 - $10</option>
                <option value="10-20">$10 - $20</option>
                <option value="20-30">$20 - $30</option>
                <option value="30-40">$30 - $40</option>
                <option value="40-50">$40 - $50</option>
                <option value="50-60">$50 - $60</option>
                <option value="60-70">$60 - $70</option>
                <option value="70-80">$70 - $80</option>
                <option value="80-90">$80 - $90</option>
                <option value="90-100">$90 - $100</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Search by name">
        </div>
        <input type="submit" class="btn btn-primary" value="Search" />
    </form>
    <?php
    if (isset($_GET["category"]) && isset($_GET["price"]) && isset($_GET["name"])) {
        $category = $_GET["category"];
        $price = explode("-", $_GET["price"]);
        $name = $_GET["name"];
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1 AND category = :category AND name LIKE :name AND unit_price BETWEEN :price1 AND :price2");
        $r = $stmt->execute([
            ":category" => $category,
            ":name" => "%" . $name . "%",
            ":price1" => $price[0],
            ":price2" => $price[1]
        ]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1");
        $r = $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    ?>
    <!-- show all products -->
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