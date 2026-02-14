<?php
include "db.php";

$id = $_POST['id'] ?? '';

if ($id == '') {
    echo "Invalid task";
    exit;
}

/* Get current status */
$result = mysqli_query($conn, "SELECT status FROM tasks WHERE id=$id");
$row = mysqli_fetch_assoc($result);

$newStatus = ($row['status'] == 'pending') ? 'finished' : 'pending';

/* Update status */
mysqli_query($conn, "UPDATE tasks SET status='$newStatus' WHERE id=$id");

echo "Status updated";
?>
