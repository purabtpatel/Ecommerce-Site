<?php
//form to edit products with input id from list_products.php
require __DIR__ . "/../../../partials/nav.php";
if (!has_role("Admin") && !has_role("Shop Owner")) {
    flash("You don't have permission to access this page");
    die(header("Location: login.php"));
}
$id = $_GET["id"];
$name = $_GET["name"];
$description = $_GET["description"];
$category = $_GET["category"];
$unit_price = $_GET["unit_price"];
$stock = $_GET["stock"];
$visibility = $_GET["visibility"];

?>
<div>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label class="form-label" for="name">Id</label>
            <input class="form-control" id="id" name="id" required value=<?php safer_echo($id) ?> />
        </div>
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" name="name" required value=<?php safer_echo($name) ?> />
        </div>
        <div class="mb-3">
            <label class="form-label " for="d">Description</label>
            <textarea class="form-control" name="description" id="d" required ><?php safer_echo($description) ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label " for="category">Category</label>
            <select class="form-control" id="category" name="category" >
                <option value="Other"> <?php echo ($category == "Other" ? "selected" : ""); ?></option>
                <option value="Food"> <?php echo ($category == "Food" ? "selected" : ""); ?></option>
                <option value="Clothing"> <?php echo ($category == "Clothing" ? "selected" : ""); ?></option>
                <option value="Electronics"> <?php echo ($category == "Electronics" ? "selected" : ""); ?></option>
                <option value="Furniture"> <?php echo ($category == "Furniture" ? "selected" : ""); ?></option>
                <option value="Toys"> <?php echo ($category == "Toys" ? "selected" : ""); ?></option>
                <option value="Books"> <?php echo ($category == "Books" ? "selected" : ""); ?></option>
                <option value="Sports"> <?php echo ($category == "Sports" ? "selected" : ""); ?></option>
                <option value="Tools"> <?php echo ($category == "Tools" ? "selected" : ""); ?></option>
                <option value="Games"> <?php echo ($category == "Games" ? "selected" : ""); ?></option>
                <option value="Movies"> <?php echo ($category == "Movies" ? "selected" : ""); ?></option>
                <option value="Music"> <?php echo ($category == "Music" ? "selected" : ""); ?></option>
                <option value="Pets"> <?php echo ($category == "Pets" ? "selected" : ""); ?></option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label" for="unit_price">unit_price</label>
            <input class="form-control" type="number" step="any" id="unit_price" name="unit_price" required value=<?php safer_echo($unit_price)?> />
        </div>
        <div class="mb-3">
            <label class="form-label " for="stock">stock</label>
            <input class="form-control" type="number" id="stock" name="stock" required value=<?php safer_echo($stock)?> />
        </div>

        <div class="mb-3">
            <label class="form-label " for="visibility">visibility</label>
            <select class="form-control" id="visibility" name="visibility" >
                <option value="1" <?php echo ($visibility == "1" ? "selected" : ""); ?>>Visible</option>
                <option value="0" <?php echo ($visibility == "0" ? "selected" : ""); ?>>Hidden</option>
            </select>
        </div>
        <input type="Save" class="mt-3 btn btn-primary" value="Save" />
    </form>
</div>
<script>
    function validate(form) {
        return true;
    }
</script>
<?php 
if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["unit_price"]) && isset($_POST["stock"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $unit_price = $_POST["unit_price"];
    $stock = $_POST["stock"];
    $visibility = $_POST["visibility"];
    
    $db = getDB();
    $stmt = $db->prepare("UPDATE Products set name=:name, description=:description, category=:category, unit_price=:unit_price, stock=:stock, visibility=:visibility WHERE id=:id");
    $r = $stmt->execute([
        ":id" => $id,
        ":name" => $name,
        ":description" => $description,
        ":category" => $category,
        ":unit_price" => $unit_price,
        ":stock" => $stock,
        ":visibility" => $visibility
    ]);
    if ($r) {
        flash("Updated successfully with id: " . $id);
    }
    else {
        $e = $stmt->errorInfo();
        flash("Error updating: " . var_export($e, true));
    }
}
?>
<?php require __DIR__ . "/../../../partials/flash.php"; ?>
