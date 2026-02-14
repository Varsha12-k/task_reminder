<?php
include "db.php";

if (!isset($_POST['id'])) {
    echo "No data received";
    exit;
}

$id = $_POST['id'];

$sql = "DELETE FROM tasks WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Task deleted successfully!";
} else {
    echo "Error deleting task";
}
?>
