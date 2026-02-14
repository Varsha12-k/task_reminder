<?php
include "db.php";

if (!isset($_POST['task_name']) || !isset($_POST['due_date'])) {
    echo "No data received";
    exit;
}

$task_name = $_POST['task_name'];
$due_date = $_POST['due_date'];

$sql = "INSERT INTO tasks (task_name, due_date) VALUES ('$task_name', '$due_date')";

if (mysqli_query($conn, $sql)) {
    echo "Task added successfully!";
} else {
    echo "Error adding task";
}
?>
