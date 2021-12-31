<?php require_once "../../database/connection.php";
$sql = "
    SELECT 
        DAY(guest_visit_timestamp) AS guest_visit_day,
        DATE(guest_visit_timestamp) AS guest_visit_date,
        COUNT(DATE(guest_visit_timestamp)) AS guest_visit_date_count
    FROM 
        guest_table 
    WHERE 
        DATE(guest_visit_timestamp) > CURRENT_DATE() - INTERVAL 1 WEEK 
    GROUP BY DATE(guest_visit_timestamp)
";

if ($result = $conn->query($sql)) {
    $data = $result->fetch_all(MYSQLI_ASSOC);

    $guest_this_week = [
        'guest_this_week' => [],
        'guest_this_week_count' => 0
    ];

    $d = new DateTime('d');
    for ($i = 0; $i < 7; $i++) {
        $available = false;
        foreach ($data as $datum) {
            if ((int)$datum['guest_visit_day'] === (int)$d->format('d')) {
                array_unshift($guest_this_week['guest_this_week'], $datum);
                $guest_this_week['guest_this_week_count'] += $datum['guest_visit_date_count'];
                $available = true;
                break;
            }
        }
        if (!$available) {
            array_unshift($guest_this_week['guest_this_week'], [
                'guest_visit_day' => (int)$d->format('d'),
                'guest_visit_date' => $d->format('Y-m-d'),
                'guest_visit_date_count' => 0
            ]);
        }
        $d->modify('-1 day');
    }

    echo json_encode([
        "isSuccess" => true,
        "data" => $guest_this_week
    ]);
} else {
    echo json_encode([
        "isSuccess" => false,
        "message" => $conn->error
    ]);
}
