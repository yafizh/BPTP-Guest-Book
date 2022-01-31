<?php
require_once "../../config/CONFIG.php";
require_once "../../database/connection.php";

$employee_id          = $conn->real_escape_string($_GET['employee_id']);
$sql = "
    DELETE FROM 
        employee_table 
    WHERE 
        employee_id=$employee_id 
";

if ($conn->query($sql) === TRUE) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['message'] = 'Record deleted successfully';
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: ' . BASE_URL . 'app/index.php?page=employee_data');
die();
