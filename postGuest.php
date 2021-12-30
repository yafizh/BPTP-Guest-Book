<?php
session_start();
require_once "connection.php";

$guest_meet_with        = $conn->real_escape_string($_POST['guest_meet_with']);
$guest_name             = $conn->real_escape_string($_POST['guest_name']);
$guest_phone_number     = $conn->real_escape_string($_POST['guest_phone_number']);
$guest_visit_timestamp  = $conn->real_escape_string($_POST['visit_date'] . ' ' .$_POST['visit_time']);
$guest_address          = $conn->real_escape_string($_POST['guest_address']);
$guest_necessity        = $conn->real_escape_string($_POST['guest_necessity']);
$guest_picture          = !empty($_POST['guest_picture']) ? ("'".$conn->real_escape_string($_POST['guest_picture'])."'") : "NULL";

$sql = "
    INSERT INTO guest_table(
        guest_meet_with,
        guest_name,
        guest_phone_number,
        guest_visit_timestamp,
        guest_address,
        guest_necessity,
        guest_picture
    ) VALUES (
        '$guest_meet_with',
        '$guest_name',
        '$guest_phone_number',
        '$guest_visit_timestamp',
        '$guest_address',
        '$guest_necessity',
        $guest_picture
    )
";

if ($conn->query($sql) === TRUE) {
    $_SESSION['isSuccess'] = true;
    $_SESSION['message'] = 'New record created successfully';
} else {
    $_SESSION['isSuccess'] = false;
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: index.php?page=guest_book');
die();