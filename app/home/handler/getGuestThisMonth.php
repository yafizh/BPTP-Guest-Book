<?php require_once "../../database/connection.php";
$sql = "
    SELECT 
        DAY(guest_visit_timestamp) AS guest_visit_day,
        DATE(guest_visit_timestamp) AS guest_visit_date,
        COUNT(DATE(guest_visit_timestamp)) AS guest_visit_date_count
    FROM 
        guest_table 
    WHERE 
        MONTH(guest_visit_timestamp) = MONTH(CURRENT_DATE()) 
    GROUP BY DATE(guest_visit_timestamp)
";

if ($result = $conn->query($sql)) {
    $data = $result->fetch_all(MYSQLI_ASSOC);

    $guest_this_month = [
        'guest_this_month' => [],
        'guest_this_month_count' => 0
    ];

    for ($i = 0; $i < (int)Date("t"); $i++) {
        $available = false;
        foreach ($data as $datum) {
            if ((int)$datum['guest_visit_day'] === ($i + 1)) {
                array_push($guest_this_month['guest_this_month'], $datum);
                $guest_this_month['guest_this_month_count'] += $datum['guest_visit_date_count'];
                $available = true;
                break;
            }
        }
        if (!$available) {
            array_push($guest_this_month['guest_this_month'], [
                'guest_visit_day' => ($i + 1),
                'guest_visit_date' => Date('Y-m-') . ($i + 1),
                'guest_visit_date_count' => 0
            ]);
        }
    }

    echo json_encode([
        "isSuccess" => true,
        "data" => $guest_this_month
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}
