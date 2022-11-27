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
                <option value="Other">Other</option>
                <option value="Food">Food</option>
                <option value="Clothing">Clothing</option>
                <option value="Electronics">Electronics</option>
                <option value="Furniture">Furniture</option>
                <option value="Toys">Toys</option>
                <option value="Books">Books</option>
                <option value="Sports">Sports</option>
                <option value="Tools">Tools</option>
                <option value="Games">Games</option>
                <option value="Movies">Movies</option>
                <option value="Music">Music</option>
                <option value="Home">Home</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <select class="form-control" id="price" name="price">
                <option value="ascend">Lowest to Highest</option>
                <option value="descend">Highest to Lowest</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Search by name">
        </div>
        <input type="submit" class="btn btn-primary" value="Search" />
    </form>
    <?php
    
    $db = getDB();
    $query = "SELECT * FROM Products WHERE visibility = 1";
    
    //filter results by category, price, name
    // if(isset($_GET["category"]) && isset($_GET["price"]) && isset($_GET["name"])){
    //     $category = $_GET["category"];
    //     $price = $_GET["price"];
    //     $name = $_GET["name"];
    //     if($category != "All"){
    //         $stmt = $db->prepare("SELECT * FROM Products WHERE category = :category AND visibility = 1");
    //         $r = $stmt->execute([":category"=>$category]);
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     if($price != "All"){
    //         $price = explode("-", $price);
    //         $stmt = $db->prepare("SELECT * FROM Products WHERE unit_price >= :min AND unit_price <= :max AND visibility = 1");
    //         $r = $stmt->execute([":min"=>$price[0], ":max"=>$price[1]]);
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     if($name != ""){
    //         $stmt = $db->prepare("SELECT * FROM Products WHERE name LIKE :name AND visibility = 1");
    //         $r = $stmt->execute([":name"=>"%$name%"]);
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    // }
    if(isset($_GET["category"])){
        $category = $_GET["category"];
        if($category != "All"){
            $query = $query . " AND category = :category";
        }
    }
    if(isset($_GET["name"])){
        $name = $_GET["name"];
        if($name != ""){
            $query = $query . " AND name LIKE :name";
        }
    }
    if(isset($_GET["price"])){
        $price = $_GET["price"];
        //only get last 10 products by created date
        if($price == "ascend"){
            $query = $query . " ORDER BY unit_price ASC, created DESC LIMIT 10";
        }
        else if($price == "descend"){
            $query = $query . " ORDER BY unit_price DESC, created DESC LIMIT 10";
        }
    }
    $stmt = $db->prepare($query);
    $params = array();
    if(isset($_GET["category"]) && $_GET["category"] != "All"){
        $params[":category"] = $_GET["category"];
    }
    if(isset($_GET["name"]) && $_GET["name"] != ""){
        $params[":name"] = "%$name%";
    }
    $r = $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //sort results by price
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