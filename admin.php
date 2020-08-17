<?php 

require("config.php");
session_start();
$action = isset($_GET['action']) ? $_GET['action'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";

if ($action != "login" && $action != "logout" && !$username) {
    login();
    exit;
}

switch($action) {
    case 'logout':
        logout();
        break;
    case 'login':
        login();
        break;
    default:
        drawDashboard();
        break;
}

function login() {
    $results = array();
    $results['pageTitle'] = "212th Admin Login";

    if (isset($_POST['login'])) {
        if ($_POST['username'] == "admin" && $_POST['password'] == "password") {
            $_SESSION['username'] = "admin";
            header("Location: admin.php");
        } else {
            $results['errorMessage'] = "Incorrect username or password!";
            require(TEMPLATES . "/admin/loginForm.php");
        }
    } else {
        require(TEMPLATES . "/admin/loginForm.php");
    }
}

function logout() {
    unset($_SESSION['username']);
    header("Location: admin.php");
}

function drawDashboard() {

}

?>