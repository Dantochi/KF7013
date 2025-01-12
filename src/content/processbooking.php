<?php
require_once 'dbconn.php';

if(isset($_REQUEST['book'])) {
    // Receive the training ID, customer ID, number_people, total booking cost, booking_notes
    $conn = getConnection();
    $trainingID = $_REQUEST["course_id"];
    $customerID = $_SESSION["customerID"];
    $number_people = filter_var($_REQUEST["quantity"], FILTER_SANITIZE_NUMBER_INT);
    print($number_people. " " . "This is the number of people");
    $course_price_result = mysqli_query($conn, "SELECT price_per_person FROM training_sessions WHERE trainingID = $trainingID");
    $row = mysqli_fetch_assoc($course_price_result);
    $course_price = $row['price_per_person'];
    print_r($course_price);
    $booking_notes = htmlspecialchars($_REQUEST["extra_details"]); // This is to mitigate malicious script
    $total_booking_cost = $course_price * $number_people;
    print_r($total_booking_cost);
    $sql = "INSERT INTO booking (trainingID, customerID, number_people, total_booking_cost, booking_notes) VALUES ($trainingID, $customerID, $number_people, $total_booking_cost, '$booking_notes')";
    $result = mysqli_query($conn, $sql);
    print_r($trainingID. $customerID. $number_people. $total_booking_cost. $booking_notes);
}