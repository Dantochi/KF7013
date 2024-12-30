<?php
// User enters email address, when the form is submitted
// I get the details of where email address is equal to given email address
// I compare the passwords using the given php function
// If its wrong, the user has to try again, if its not wrong the user can login
require_once "./dbconn.php";
require_once 'pagestart.php';
require_once "header.php";
echo makePageStart();
echo makeHeader();
echo "
<main style='height: 90vh;'>
        <section style='display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;'>
            <form action='login.php' method='post' id='login_form' class='user-form'>
                <div>
                    <h1 id='register_header'>Login</h1>
                </div>
                <div class='input_container'><label for='email' required>Email</label>
                    <input type='email' name='email' id='email'>
                </div>
                <div class='input_container'><label for='password' required>Password</label>
                    <input type='password' name='password' id='password'>
                </div>
                <p style='color: red;'>";
if(isset($_REQUEST["email"])){
    $emailAddress = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $sql = "SELECT * FROM customers WHERE customer_email = ?";
    $conn = getConnection();
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "s",  $emailAddress);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        if($result == null){
            echo "You have inputted a wrong email or password";
        } else {
            $customerID = $row["customerID"];
            $passwordHash = $row["password_hash"];
            $customerForename = $row["customer_forename"];
            $customerSurname = $row["customer_surname"];
            $customerEmail = $row["customer_email"];
            $customerDOB = $row["date_of_birth"];
            $_SESSION["email"] = $customerEmail; // here I set the session for the email address to extract their details
            $_SESSION["firstName"] = $customerForename;
            header("location: index.php");
            print_r($_SESSION);
            if(password_verify($password, $passwordHash)){
                echo"Login Successful, Welcome.'<br>'.$customerID.'<br>'.$customerForename.'<br>'.$customerSurname.'<br>'.$customerEmail.'<br>'.$customerDOB";
            }else{
                echo "You have inputted a wrong email or password";
            }
        }

        }
    else {
        echo "<p>Could not prepare statement</p>";
        session_destroy(); // Incase the script does not run or the statement cannot be prepared, we destroy the session created
    }
}
        echo"</p>
                <div class='input_container'>
                    <input type='submit' name='Login' id='login' value='Login'>
                </div>
            </form>
        </section>
    </main>
";

