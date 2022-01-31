<?php
require_once "../../config/CONFIG.php";
require_once "../../database/connection.php";

$guest_id          = $conn->real_escape_string($_GET['guest_id']);
$sql = "
    DELETE FROM 
        guest_table 
    WHERE 
        guest_id=$guest_id 
";

if ($conn->query($sql) === TRUE) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['message'] = 'Record deleted successfully';
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: ' . BASE_URL . 'app/index.php?page=guest_data');
die();
