<?php
session_start();
require_once "../../config/CONFIG.php";
require_once "../../database/connection.php";

$employee_name  = $conn->real_escape_string($_POST['employee_name']);
$created_at     = Date("Y-m-d H:i:s");
$edited_at      = $created_at;

$sql = "
    INSERT INTO employees_table(
        employee_name 
    ) VALUES (
        '$employee_name' 
    )
";

if ($conn->query($sql) === TRUE) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['message'] = 'New record created successfully';
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: ' . BASE_URL . 'app/index.php?page=employee_form');
die();
