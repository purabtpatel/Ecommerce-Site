<?php
//form to edit products with input id from list_products.php
require __DIR__ . "/../../partials/nav.php";
//fetch product info from database based on id
$db = getDB();
$stmt = $db->prepare("SELECT * FROM Products WHERE id = :id");
$stmt->execute([":id" => $_GET["id"]]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
//fetch averge rating for product
$stmt = $db->prepare("SELECT AVG(rating) FROM Ratings WHERE product_id = :id");
$stmt->execute([":id" => $_GET["id"]]);
$rating = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php safer_echo($product["name"]); ?></h5>
        <p class="card-text"><?php safer_echo($product["description"]); ?></p>
        <p class="card-text">Category: <?php safer_echo($product["category"]); ?></p>
        <p class="card-text">$<?php safer_echo($product["unit_price"]); ?></p>
        <p class="card-text">Stock: <?php safer_echo($product["stock"]); ?></p>
        <p class="card-text">Average Rating: <?php safer_echo($rating["AVG(rating)"]); ?></p>
    </div>
    <!-- if admin is logged in, show edit button -->
    <?php if (has_role("Admin")) : ?>
        <div class="card-footer">
            <a href="admin/edit_products.php?
                id=<?php safer_echo($r['id']); ?>" class="btn btn-primary">Edit</a>
        </div>
    <?php endif; ?>
    <?php //fetch all ratings for product
    $stmt = $db->prepare("SELECT * FROM Ratings WHERE product_id = :id");
    $stmt->execute([":id" => $_GET["id"]]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="card-footer">
        <h5 class="card-title
        ">Ratings</h5>
        <?php foreach ($r as $rating) : ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    //fetch user privacy for rating
                    $stmt = $db->prepare("SELECT * FROM Users WHERE id = :id");
                    $stmt->execute([":id" => $rating["user_id"]]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($user["privacy"] == 0) {
                        $name = "Anonymous";
                    } else {
                        $name = $user["username"];
                    } 
                    ?>
                    <h5 class="card-title"><?php safer_echo($name); ?></h5>
                    <h5 class="card-text"><?php safer_echo($rating["rating"]); ?> Stars</h5>
                    <p class="card-text"><?php safer_echo($rating["comment"]); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php //check if current user has purchased product and give a form to add rating
    $stmt = $db->prepare("SELECT * FROM Orders WHERE user_id = :id");
    $stmt->execute([":id" => get_user_id()]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $purchased = false;
    foreach ($r as $order) {
        $stmt = $db->prepare("SELECT * FROM OrderItems WHERE order_id = :id");
        $stmt->execute([":id" => $order["id"]]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($r as $item) {
            if ($item["product_id"] == $_GET["id"]) {
                $purchased = true;
            }
        }
    }
    ?>
    <?php if ($purchased) : ?>
        <div class="card-footer">
            <form method="POST">
                <label for="rating">Rating</label>
                <input type="number" id="rating" name="rating" min="1" max="5" required>
                <label for="comment">Comment</label>
                <input type="text" id="comment" name="comment" required>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    <?php endif; ?>
</div>
<?php
//if submit button is pressed, add rating to database
if (isset($_POST["submit"])) {
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];
    $stmt = $db->prepare("INSERT INTO Ratings (product_id, user_id, rating, comment) VALUES (:pid, :uid, :rating, :comment)");
    $r = $stmt->execute([
        ":pid" => $_GET["id"],
        ":uid" => get_user_id(),
        ":rating" => $rating,
        ":comment" => $comment
    ]);
    if ($r) {
        flash("Rating added successfully");
    } else {
        $e = $stmt->errorInfo();
        flash("Error adding rating: " . var_export($e, true));
    }
}
?>
<?php require __DIR__ . "/../../partials/flash.php"; ?>