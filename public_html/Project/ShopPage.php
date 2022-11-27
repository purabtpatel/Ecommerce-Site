<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<!-- show all Products from products table with visibility of true-->

<div class="container-fluid">
    <h1>Shop</h1>
    <div class="list-group">
        <!-- filter by category -->
        <div class="list-group-item">
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
                <input type="submit" class="btn btn-primary" value="Filter"/>
            </form>
        </div>
        <!-- filter by price -->
        <div class="list-group-item">
            <form method="GET">
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
                <input type="submit" class="btn btn-primary" value="Filter"/>
            </form>
        </div>
        <!-- search by name -->
        <div class="list-group-item">
            <form method="GET">
                <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="name"/>
                <input type="submit" class="btn btn-primary" value="Search"/>
            </form>
        </div>
        <?php
        //limit results to 10 most recent products by created date
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1 ORDER BY created DESC LIMIT 10");
        $r = $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //if category is set, filter by category
        if(isset($_GET["category"])){
            $category = $_GET["category"];
            if($category != "All"){
                $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1 AND category = :category ORDER BY created DESC LIMIT 10");
                $r = $stmt->execute([":category"=>$category]);
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        //if search is set, filter by search
        if(isset($_GET["search"])){
            $search = $_GET["search"];
            $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1 AND name LIKE :search ORDER BY created DESC LIMIT 10");
            $r = $stmt->execute([":search"=>"%$search%"]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        //if sort is set, sort by sort
        if(isset($_GET["sort"])){
            $sort = $_GET["sort"];
            if($sort == "price"){
                $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1 ORDER BY unit_price DESC LIMIT 10");
                $r = $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            if($sort == "name"){
                $stmt = $db->prepare("SELECT * FROM Products WHERE visibility = 1 ORDER BY name ASC LIMIT 10");
                $r = $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
       
        
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