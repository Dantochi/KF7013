<?php
// Sanitize form input, database requests and responses, Sanitize form output
require_once './dbconn.php';
$conn = getConnection();
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$password = password_hash($_REQUEST["password"], PASSWORD_DEFAULT);
$email = $_REQUEST["email"];
$DOB = $_REQUEST["DOB"];

$sql = "INSERT INTO customers (password_hash, customer_forename, customer_surname, customer_email, date_of_birth) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
if($stmt){
    mysqli_stmt_bind_param($stmt, "ssssi",  $password, $firstName, $lastName, $email, $DOB);
    $result = mysqli_stmt_execute($stmt);
    $_SESSION["firstName"] = $firstName;
    $_SESSION["email"] = $email;
    print_r($_SESSION);
    header("Location: ./index.php");
    if($result){
//        echo "<p>Error: ".mysqli_stmt_error($stmt)."</p>";
        echo "<p>This is a valid user</p>";
    }
}else{
    echo "<p>Could not prepare statement</p>";
    session_destroy(); // Incase the script does not run or the statement cannot be prepared, we destroy the session created
}
//print_r($result);
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <p>$firstName</p>
    <p>$lastName</p>
    <p>$password</p>
    <p>$DOB</p>
</body>
</html>
";

