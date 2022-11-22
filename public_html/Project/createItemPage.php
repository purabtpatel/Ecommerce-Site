<?php
require(__DIR__ . "/../../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Create New Product</h1>
    <form onsubmit="return validate(this)" method="POST">
    <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" name="name" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="d">Description</label>
            <textarea class="form-control" name="description" id="d"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Category</label>
            <input class="form-control" id="category" name="category" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input class="form-control" id="price" name="price" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="stock">Stock</label>
            <input class="form-control" id="stock" name="stock" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="visibility">Visibility</label>
            <input class="form-control" id="visibility" name="visibility" required />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Submit" />
    </form>
</div>

<?php
if (!has_role("Admin") && !has_role("Shop Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["save"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $user = get_user_id();
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Products (name, description, price, stock, user_id) VALUES(:name, :description, :price, :stock, :user)");
    $r = $stmt->execute([
        ":name" => $name,
        ":description" => $description,
        ":price" => $price,
        ":stock" => $stock,
        ":user" => $user
    ]);
    if ($r) {
        flash("Created successfully with id: " . $db->lastInsertId());
    } else {
        $e = $stmt->errorInfo();
        flash("Error creating: " . var_export($e, true));
    }
}
?>

<?php
require(__DIR__."/../../partials/flash.php");
?>

