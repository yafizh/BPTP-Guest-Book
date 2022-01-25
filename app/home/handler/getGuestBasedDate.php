<?php require_once "../../database/connection.php";
$temp = explode('-', $_GET['start']);
$start = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
$temp = explode('-', $_GET['end']);
$end = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
$sql = "
    SELECT 
        * 
    FROM 
        guest_view 
    WHERE 
        guest_visit_date 
        BETWEEN 
            '$start' 
            AND 
            '$end'
";
if ($result = $conn->query($sql)) {
    $data = [
        "guests" => $result->fetch_all(MYSQLI_ASSOC),
        "count" => 0,
    ];
    $data['count'] = count($data['guests']);
    echo json_encode([
        "isSuccess" => true,
        "data" => $data
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}
