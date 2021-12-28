<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "guest_book_bptp";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}