<?php
include 'db.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];  // Simpan user_id di session
    header("Location: ../dashboard.html");
} else {
    header("Location: ../index.html?error=1");
}
?>
