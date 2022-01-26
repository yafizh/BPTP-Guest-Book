<?php require_once "../../database/connection.php";
$keyword = $_GET['keyword'];
$sql = "
    SELECT 
        * 
    FROM 
        employee_table 
    WHERE 
        employee_name LIKE '%$keyword%' 
        OR 
        employee_nip LIKE '$keyword%' 
        OR 
        employee_position LIKE '$keyword%' 
        OR 
        employee_mastery LIKE '$keyword%' 
    ORDER BY employee_name DESC";

if ($result = $conn->query($sql)) {
    echo json_encode([
        "isSuccess" => true,
        "data" => $result->fetch_all(MYSQLI_ASSOC)
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}