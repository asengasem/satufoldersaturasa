<?php
include 'db.php';

session_start();
$user_id = $_SESSION['user_id'];  // Dapatkan user_id dari session

$sql = "SELECT * FROM reports WHERE user_id='$user_id' ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['date'] . "</strong>: " . $row['activity'] . "</p>";
    }
} else {
    echo "No reports found.";
}
?>
