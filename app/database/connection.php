<?php 
define("SERVERNAME","localhost");
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'guest_book_bptp');

// Create connection
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}