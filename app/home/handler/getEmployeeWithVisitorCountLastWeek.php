<?php require_once "../../database/connection.php";
$monday_in_last_week = Date("Y-m-") . (Date('d') - ((Date('N') - 1)) - 7);
$friday_in_last_week = Date("Y-m-") . ((Date('d') - (Date('N') - 1)) - 7 + 4);
$sql = "
SELECT 
    employee_name,
    IFNULL(
            (SELECT 
                COUNT(guest_id)
            FROM 
                guest_view 
            WHERE 
                guest_view.employee_id=employee_table.employee_id 
                AND 
                guest_visit_date 
                    BETWEEN 
                        '$monday_in_last_week' 
                        AND 
                        '$friday_in_last_week' 
            ), 0
    ) AS visitor_count
FROM 
    employee_table 
ORDER BY 
    visitor_count DESC 
LIMIT 9
";

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
