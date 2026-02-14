<?php
include 'db.php';

$sql = "SELECT id, task_name, due_date, status FROM tasks";
$result = mysqli_query($conn, $sql);

$tasks = [];

while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;
}

echo json_encode($tasks);
?>

