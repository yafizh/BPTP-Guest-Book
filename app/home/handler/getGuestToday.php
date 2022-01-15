<?php require_once "../../database/connection.php";
$sql = "
    SELECT 
        DAY(guest_visit_timestamp) AS guest_visit_day,
        DATE(guest_visit_timestamp) AS guest_visit_date,
        COUNT(DATE(guest_visit_timestamp)) AS guest_visit_date_count
    FROM 
        guest_table 
    WHERE 
        DATE(guest_visit_timestamp) = CURRENT_DATE()
    GROUP BY DATE(guest_visit_timestamp)
";

if ($result = $conn->query($sql)) {
    $guest_today = [
        'guest_today' => [],
        'guest_today_count' => 0
    ];
    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $guest_today['guest_today'][] = $data;
        $guest_today['guest_today_count'] += (int)$data['guest_visit_date_count'];
    }

    echo json_encode([
        "isSuccess" => true,
        "data" => $guest_today
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}
