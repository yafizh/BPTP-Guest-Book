<?php require_once "../../database/connection.php";
if (isset($_POST['measure'])) {
    if (strtoupper($_POST['measure']) == 'TODAY') {
        $measure = "guest_visit_date = CURRENT_DATE()";
    } else if (strtoupper($_POST['measure']) == 'LAST_WEEK') {
        $monday_in_last_week = Date("Y-m-") . (Date('d') - ((Date('N') - 1)) - 7);
        $friday_in_last_week = Date("Y-m-") . ((Date('d') - (Date('N') - 1)) - 7 + 4);
        $measure = "
            guest_visit_date 
            BETWEEN 
                '$monday_in_last_week' 
                AND 
                '$friday_in_last_week' 
        ";
    } else if (strtoupper($_POST['measure']) == 'LAST_MONTH') {
        $measure = "
            guest_view.employee_id=employee_table.employee_id 
            AND 
            MONTH(guest_visit_date) = (MONTH(CURRENT_DATE() - INTERVAL 1 MONTH))
        ";
    } else if (strtoupper($_POST['measure']) == 'LAST_YEAR') {
        $measure = "
            guest_view.employee_id=employee_table.employee_id 
            AND 
            YEAR(guest_visit_date) = (YEAR(CURRENT_DATE() - INTERVAL 1 YEAR))
        ";
    }

    $limit = isset($_POST['limit']) ? $_POST['limit'] : false;

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
                            $measure 
                        ), 0
                ) AS visitor_count
            FROM 
                employee_table 
            ORDER BY 
                visitor_count DESC 
            ";

    if ($limit) $sql .= "LIMIT $limit";
}

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
