<?php require_once "../../database/connection.php";
$sql = "
    SELECT 
        guest_meet_with AS employee_name, 
        COUNT(guest_id) AS visitor_count 
    FROM 
        guest_view 
    GROUP BY guest_meet_with;
";

if ($result = $conn->query($sql)) {
    $data = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($data as $index => $datum) if (is_null($datum['employee_name'])) $data[$index]['employee_name'] = "Pegawai Lainnya";
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
