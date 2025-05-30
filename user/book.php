<?php
session_start();
include '../config/db.php';
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $slot_id = $_POST['slot_id'];
    $user_id = $_SESSION['user']['id'];

    // update status slot
    $conn->prepare("UPDATE parkir_slots SET status='booked' WHERE id=?")->execute([$slot_id]);

    // insert booking
    $conn->prepare("INSERT INTO bookings (user_id, slot_id) VALUES (?, ?)")->execute([$user_id, $slot_id]);

    header("Location: index.php");
}
?>
