<?php
include 'db.php';

$activity = $_POST['activity'];
$date = date('Y-m-d');

$sql = "INSERT INTO reports (activity, date) VALUES ('$activity', '$date')";
if ($conn->query($sql) === TRUE) {
    // Send email to boss
    include 'send_email.php';
    header("Location: ../dashboard.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
