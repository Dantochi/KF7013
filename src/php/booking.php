<?php
session_start();
echo "session has started";
require_once 'dbconn.php';
require_once 'pagestart.php';
require_once 'header.php';
require_once 'pageEnd.php';

echo makePageStart();
echo makeHeader();
// TODO: To get the id from the course page and add it to an array
if(isset($_REQUEST['course'])){
    $_SESSION['items'][] = $_REQUEST['course'];
    $course_id = $_SESSION['items'][0];
    $sql = "SELECT * FROM training_sessions WHERE trainingID = $course_id";
    $conn = getConnection();
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $course_name = $row['title'];
    $course_price = $row['price_per_person'];
    $course_date = substr($row["session_date"], 0, 10);
    echo"<section id='booking-section'>
        <form action='./booking.php' method='post' id='booking-form'>
            <div id='booking-form-title'>
                <h3>BOOKING FORM</h3>
            </div>
            <div id='booking-container'>
                <div id='booking-details-container'>
                    <div class='booking-details'>
                        <p class='booking-entry-title'>Date</p>
                        <p class='booking-entry'>$course_date</p>
                    </div>
                    <div class='booking-details'>
                        <p class='booking-entry-title'>Subject</p>
                        <p class='booking-entry'>Course Booking</p>
                    </div>
                    <div class='booking-details'>
                        <p class='booking-entry-title'>Billed To:</p>
                        <p class='booking-entry'>Tochukwu Chidi</p>
                    </div>
                    <div class='booking-details'>
                        <p class='booking-entry-title'>Currency</p>
                        <p class='booking-entry'>Pounds</p>
                    </div>
                </div>
                <div id='booking-summary'>
                    <div id='booking-summary-title'>
                        <div class='booking-summary-title'>
                            <p class='booking-title'>DESCRIPTION</p>
                        </div>
                        <div class='booking-summary-title'>
                            <p class='booking-title'>NO. OF PEOPLE</p>
                        </div>
                        <div class='booking-summary-title'>
                            <p class='booking-title'>UNIT PRICE</p>
                        </div>
                        <div class='booking-summary-title'>
                            <p class='booking-title'>AMOUNT</p>
                        </div>
                    </div>
                    <div class='booking-items'>
                        <div id='booking-product'>
                            <p class='booking-product'>$course_name</p>
                        </div>
                        <div id='booking-quantity'>
                            <input type='number' name='quantity' id='booking-quantity'>
                        </div>
                        <div class='booking-price'>
                            <p class='booking-product'>$$course_price</p>
                        </div>
                        <div class='booking-price'>
                            <p class='booking-product'>$course_price</p>
                        </div>
                    </div>
                </div>
                <div id='booking-extra-container'>
                    <div id='booking-extra'>
                        <p>Any extra details?</p>
                        <textarea>
                    </textarea>
                    </div>
                </div>
                <div id='book-button-container'>
                    <input type='button' value='Book'>
                </div>
            </div>
            </div>
        </form>
    </section>
";


}


echo makePageEnd();

