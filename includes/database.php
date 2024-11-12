<?php
// database.php - Database connection and query functions

$conn = new mysqli("servername", "username", "password", "dbname");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example of query function
function getLeads() {
    global $conn;
    $sql = "SELECT * FROM leads";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
