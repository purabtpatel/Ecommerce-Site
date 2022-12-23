<?php
require __DIR__ . "/../../partials/nav.php";
if (!is_logged_in()) {
    redirect("/login.php");
}
?>
<!-- display list of orders current user has made -->
<div class="container">
    <h3>Order History</h3>
    <!-- filter by date range, categpry, and price range -->
    <!-- sort by total, purchase date -->
    <div class="row">
        <div class="col">
            <form method="POST">
                <div class="form-group row">
                    <label for="start" class="col-sm-2 col-form-label">Start Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="start" name="start">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="end" class="col-sm-2 col-form-label">End Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="end" name="end">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
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
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="price" name="price">
                            <option value="ascend">Lowest to Highest</option>
                            <option value="descend">Highest to Lowest</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sort" class="col-sm-2 col-form-label">Sort</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sort" name="sort">
                            <option value="total">Total</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
                <div>
                    
                </div>
            </form>
        </div>
    </div>
    <?php
    $db = getDB();
    $query = "SELECT * FROM Orders WHERE user_id = :id";
    $params = [":id" => get_user_id()];
    if (isset($_POST["start"]) && isset($_POST["end"])) {
        $query = $query . " AND created BETWEEN :start AND :end";
        $params[":start"] = $_POST["start"];
        $params[":end"] = $_POST["end"];
    }
    if(isset($_POST["start"]) && !isset($_POST["end"])){
        $query = $query . " AND created >= :start";
        $params[":start"] = $_POST["start"];
    }
    if(!isset($_POST["start"]) && isset($_POST["end"])){
        $query = $query . " AND created <= :end";
        $params[":end"] = $_POST["end"];
    }

    if (isset($_POST["price"])) {
        if ($_POST["price"] == "ascend") {
           if(isset($_POST["sort"]) && $_POST["sort"] == "date"){
                $query = $query . " ORDER BY created ASC, total_price ASC";
            } else {
                $query = $query . " ORDER BY total_price ASC";
            }
        } else {
            if(isset($_POST["sort"]) && $_POST["sort"] == "date"){
                $query = $query . " ORDER BY created DESC, total_price DESC";
            } else {
                $query = $query . " ORDER BY total_price DESC";
            }
        }
    }
    $stmt = $db->prepare($query);
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //filter by category by going through each order and checking if the category of each item matches the category selected
    if (isset($_POST["category"]) && $_POST["category"] != "All") {
        $filtered = [];
        foreach ($result as $r) {
            $query = "SELECT * FROM OrderItems WHERE order_id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute([":id" => $r["id"]]);
            $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($items as $i) {
                $query = "SELECT * FROM Products WHERE id = :id";
                $stmt = $db->prepare($query);
                $stmt->execute([":id" => $i["product_id"]]);
                $item = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($item["category"] == $_POST["category"]) {
                    array_push($filtered, $r);
                    break;
                }
            }
        }
        $result = $filtered;
    }
    ?>
    

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">View Order</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- fetch order ids -->
                    <?php
                    foreach ($result as $r) {
                        echo "<tr>
                        <td>" . $r["id"] . "</td>
                        <td>" . $r["total_price"] . "</td>
                        <td>" . $r["created"] . "</td>
                        <td><a type=\"button\" href=\"ViewOrder.php?id=" . $r["id"] . "&new=0\" class=\"btn btn-primary\">View Order</a></td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- pagination -->
    <?php
    $headers = "?";
    if (isset($_POST["start"])) {
        $headers = "start=" . $_POST["start"] . "&";
    }
    if (isset($_POST["end"])) {
        $headers = $headers . "end=" . $_POST["end"] . "&";
    }
    if (isset($_POST["category"])) {
        $headers = $headers . "category=" . $_POST["category"] . "&";
    }
    if (isset($_POST["price"])) {
        $headers = $headers . "price=" . $_POST["price"] . "&";
    }
    if (isset($_POST["sort"])) {
        $headers = $headers . "sort=" . $_POST["sort"] . "&";
    }

    ?>
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination
                justify-content-center">
                    <li class="page-item"><a class="page-link" href=<?php echo "Orders.php" . $headers . "page=1"; ?>>1</a></li>
                    <li class="page-item"><a class="page-link" href=<?php echo "Orders.php" . $headers . "page=2"; ?>>2</a></li>
                    <li class="page-item"><a class="page-link" href=<?php echo "Orders.php" . $headers . "page=3"; ?>>3</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>