<?php
require(__DIR__ . "/../../partials/nav.php");
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
            <textarea class="form-control" name="description" id="d" required ></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Category</label>
            <input class="form-control" id="category" name="category" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="unit_price">unit_price</label>
            <input class="form-control" type="number" step="any" id="unit_price" name="unit_price" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="stock">Stock</label>
            <input class="form-control" type="number" id="stock" name="stock" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="visibility">Visibility</label>
            <input type="checkbox" id="visibility" name="visibility" />
        </div>

        <input type="submit" class="mt-3 btn btn-primary" value="Submit" />
    </form>
</div>
<script>
    function validate(form) {
        return true;
    }
</script>
<?php
if (!has_role("Admin") && !has_role("Shop Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["unit_price"]) && isset($_POST["stock"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $unit_price = $_POST["unit_price"];
    $stock = $_POST["stock"];
    if(isset($_POST["visibility"])){
        $visibility = 1;
    }
    else{
        $visibility = 0;
    }
    
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Products (name, description, unit_price, stock, visibility) VALUES(:name, :description, :unit_price, :stock, :visibility)");
    $r = $stmt->execute([
        ":name" => $name,
        ":description" => $description,
        ":unit_price" => $unit_price,
        ":stock" => $stock,
        ":visibility" => $visibility
        
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

