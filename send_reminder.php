<?php
date_default_timezone_set("Asia/Kolkata");

include "db.php";
composer require twilio/sdk

// current date & time (minute-level)
$current_time = date("Y-m-d H:i");

// get tasks whose time matches now and still pending
$sql = "SELECT task_name, due_date 
        FROM tasks 
        WHERE status='pending'
        AND DATE_FORMAT(due_date,'%Y-%m-%d %H:%i') = '$current_time'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "No reminders at this time";
    exit;
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "🔔 Reminder: ".$row['task_name']." at ".$row['due_date']."<br>";
}
?>
