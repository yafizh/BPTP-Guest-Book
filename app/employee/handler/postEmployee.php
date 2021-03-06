<?php
session_start();
require_once "../../config/CONFIG.php";
require_once "../../database/connection.php";

$employee_name          = $conn->real_escape_string($_POST['employee_name']);
$employee_nip           = $conn->real_escape_string($_POST['employee_nip']);
$employee_sex           = $conn->real_escape_string($_POST['employee_sex']);
$employee_position      = $conn->real_escape_string($_POST['employee_position']);
$employee_mastery       = $conn->real_escape_string($_POST['employee_mastery']);

$sql = "
    INSERT INTO employee_table(
        employee_name,
        employee_nip,
        employee_sex,
        employee_position, 
        employee_mastery 
    ) VALUES (
        '$employee_name',
        '$employee_nip',
        '$employee_sex',
        '$employee_position', 
        '$employee_mastery' 
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
