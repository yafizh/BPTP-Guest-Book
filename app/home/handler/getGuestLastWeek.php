<?php require_once "../../database/connection.php";
$sql = "
    SELECT 
        DAY(guest_visit_timestamp) AS guest_visit_day,
        DATE(guest_visit_timestamp) AS guest_visit_date,
        COUNT(DATE(guest_visit_timestamp)) AS guest_visit_date_count 
    FROM 
        guest_table 
    WHERE 
        DATE(guest_visit_timestamp) 
        BETWEEN 
            (CURRENT_DATE() - INTERVAL 2 WEEK) 
            AND 
            (CURRENT_DATE() - INTERVAL 1 WEEK) 
        GROUP BY DATE(guest_visit_timestamp)
    ";

if ($result = $conn->query($sql)) {
    $guest_last_week = [
        'guest_last_week' => $result->fetch_all(MYSQLI_ASSOC),
        'guest_last_week_count' => 0
    ];

    foreach ($guest_last_week['guest_last_week'] as $datum) {
        $guest_last_week['guest_last_week_count'] += $datum['guest_visit_date_count'];
    }
    echo json_encode([
        "isSuccess" => true,
        "data" => $guest_last_week
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}
