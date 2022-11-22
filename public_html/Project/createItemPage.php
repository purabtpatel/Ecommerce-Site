<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Login</h1>
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

