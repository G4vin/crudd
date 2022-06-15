<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "crud_app_G";

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

require_once './db_connection.php';
$id = trim(mysqli_real_escape_string($conn, $_GET['id']));
$delete_user = mysqli_query($conn, "DELETE FROM `users` WHERE id='$id'");
header('Location: index.php');
exit;