<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizers.php");
//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");
//TODO 4: Flash Message Helpers
function flash($msg = "", $color = "info"){
    $message = ["text" => $msg, "color" => $color];

    if(isset($_SESSION["flash"])){
        array_push($_SESSION["flash"], $message);
    } else {
        $_SESSION["flash"] = array();
        array_push($_SESSION["flash"], $message);
    }
}

function getMessages(){
    if(isset($_SESSION["flash"])){
        $flashes = $_SESSION["flash"];
        $_SESSION["flash"] = array();
        return $flashes;
    }
    return array();
}
//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");

require(__DIR__ . "/get_url.php");

//redirect 
require(__DIR__ . "/Redirect.php");

?>