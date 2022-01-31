<?php
require_once "../../config/CONFIG.php";
require_once "../../database/connection.php";

$employee_id            = $conn->real_escape_string($_POST['employee_id']);
$employee_name          = $conn->real_escape_string($_POST['employee_name']);
$employee_nip           = $conn->real_escape_string($_POST['employee_nip']);
$employee_sex           = $conn->real_escape_string($_POST['employee_sex']);
$employee_position      = $conn->real_escape_string($_POST['employee_position']);
$employee_mastery       = $conn->real_escape_string($_POST['employee_mastery']);

$sql = "
    UPDATE 
        employee_table 
    SET
        employee_name='$employee_name',
        employee_nip='$employee_nip',
        employee_sex='$employee_sex',
        employee_position='$employee_position', 
        employee_mastery='$employee_mastery' 
    WHERE 
        employee_id=$employee_id
";

if ($conn->query($sql) === TRUE) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['message'] = 'Record updated successfully';
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: ' . BASE_URL . 'app/index.php?page=employee_data');
die();
