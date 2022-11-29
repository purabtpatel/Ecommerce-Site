<?php
//form to edit products with input id from list_products.php
require __DIR__ . "/../../../partials/nav.php";
if(!has_role("Admin") && !has_role("Shop Owner")){
    flash("You don't have permission to access this page");
    die(header("Location: login.php"));
}

?>
<div>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label class="form-label text-white" for="name">Id</label>
            <input class="form-control" id="id" name="id" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="d">Description</label>
            <textarea class="form-control" name="description" id="d" required ></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Category</label>
            <select class="form-control" id="category" name="category">
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

        <input type="Save" class="mt-3 btn btn-primary" value="Submit" />
    </form>
</div>
<script>
    function validate(form) {
        return true;
    }
</script>

