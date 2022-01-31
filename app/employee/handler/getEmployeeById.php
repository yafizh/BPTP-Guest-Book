<?php require_once "../../database/connection.php";
$employee_id = $_GET['employee_id'];
$sql = "
    SELECT 
        * 
    FROM 
        employee_table 
    WHERE 
        employee_id = $employee_id";

if ($result = $conn->query($sql)) {
    echo json_encode([
        "isSuccess" => true,
        "data" => $result->fetch_assoc()
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}