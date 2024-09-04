<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Redirect to dashboard
    header("Location: ../dashboard.html");
} else {
    // Redirect back to login with error
    header("Location: ../index.html?error=1");
}
?>
