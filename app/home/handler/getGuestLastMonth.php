<?php require_once "../../database/connection.php";
$sql = "
    SELECT 
        DAY(guest_visit_timestamp) AS guest_visit_day,
        DATE(guest_visit_timestamp) AS guest_visit_date,
        COUNT(DATE(guest_visit_timestamp)) AS guest_visit_date_count 
    FROM 
        guest_table 
    WHERE 
        MONTH(guest_visit_timestamp) = MONTH(CURRENT_DATE() - INTERVAL 1 MONTH) 
        GROUP BY DATE(guest_visit_timestamp)
    ";

if ($result = $conn->query($sql)) {
    $data = $result->fetch_all(MYSQLI_ASSOC);

    $guest_last_month = [
        'guest_last_month' => [],
        'guest_last_month_count' => 0
    ];

    $d = new DateTime();
    $d->modify('-1 month');
    for ($i = 0; $i < (int)Date("t"); $i++) {
        $available = false;
        foreach ($data as $datum) {
            if ((int)$datum['guest_visit_day'] === ($i + 1)) {
                array_push($guest_last_month['guest_last_month'], $datum);
                $guest_last_month['guest_last_month_count'] += $datum['guest_visit_date_count'];
                $available = true;
                break;
            }
        }
        if (!$available) {
            array_push($guest_last_month['guest_last_month'], [
                'guest_visit_day' => ($i + 1),
                'guest_visit_date' => $d->format('Y-m-') . ($i + 1),
                'guest_visit_date_count' => 0
            ]);
        }
    }

    echo json_encode([
        "isSuccess" => true,
        "data" => $guest_last_month
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}
