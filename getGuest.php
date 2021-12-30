<?php require_once "connection.php";
$keyword = $_GET['keyword'];
$sql = "
    SELECT 
        * 
    FROM 
        guest_view 
    WHERE 
        guest_name          LIKE '%$keyword%' OR
        guest_visit_date    LIKE '%$keyword%' OR
        guest_agency        LIKE '%$keyword%' OR 
        guest_meet_with     LIKE '%$keyword%' 
    ORDER BY guest_id DESC";

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