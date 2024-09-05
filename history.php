<?php
include 'db.php';

$sql = "SELECT * FROM reports ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['date'] . "</strong>: " . $row['activity'] . "</p>";
    }
} else {
    echo "No reports found.";
}
?>
