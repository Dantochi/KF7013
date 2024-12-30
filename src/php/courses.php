<?php
require_once 'dbconn.php';
require_once 'header.php';
require_once 'pagestart.php';
require_once 'pageEnd.php';
require_once 'footersection.php';
$conn = getConnection();
$sql = "SELECT * FROM training_sessions";
$result = mysqli_query($conn, $sql);
echo makePageStart();
echo makeHeader();
echo "<main>
        <section id='course-list-container'>
        <div class='course-list-container'>";
function whoCanBook(){ // This redirects the user to the bookings page if they have not logged in
    if(!isset($_SESSION['email'])){
        return "./courses.php";
    } else{
        return "./booking.php";
    }
}
if($result){
    $userLoggedIn = whoCanBook();
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['trainingID'];
        $title = $row["title"];
        $description = $row["description"];
        $session_date = substr($row["session_date"], 0, 10);
        $price = $row["price_per_person"];
        $course_image = $row["session_imagepath"];
        echo "<div class='skill'>
                    <p class='course-level'>$session_date</p>
                    <p class='course-role'>$title</p>
                    <div class='skill-logo'>
                        <div>
                            <i class='bx bxl-postgresql' style='font-size: 15px;'></i>
                        </div>
                    </div>
                    <p class='course-period'>$description</p>
                    <form action='$userLoggedIn' method='post' id='submit-course'>
                    <input type='submit' value='$$price'>
                    <input type='hidden' name='course' value=$id>
                    </form>
                </div>
                ";
    }
    echo "</div>
                </section>
                </main>";
}


echo makeFooterSection();
echo makePageEnd();
