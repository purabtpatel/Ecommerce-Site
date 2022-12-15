<?php
$db = getDB();
$stmt = $db->prepare("DELETE FROM Cart WHERE user_id = :user_id");
$r = $stmt->execute([":user_id" => get_user_id()]);
if ($r) {
    flash("Cart Cleared");
} else {
    flash("Error clearing cart");
}
die(header("Location: ViewCart.php"));
?>