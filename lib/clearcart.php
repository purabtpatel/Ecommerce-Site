<?php 
function clearcart() {
    //clear cart of current user
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM Cart WHERE user_id = :user_id");
    $r = $stmt->execute([":user_id" => get_user_id()]);
    if ($r) {
        flash("Cart cleared");
        die(header("Location: ViewCart.php"));
    } else {
        flash("Error clearing cart");
    }
}
?>