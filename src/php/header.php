<?php
require_once 'loginLogout.php';
require_once 'dbconn.php';
$conn = getConnection();
function checkUserName(){
    if(!isset($_SESSION['email'])){
        return "<li><a href='../register.html'>Register</a></li>";
    } else{
        return null;
    }
}

function checkUserLoggedIn(){
    if(!isset($_SESSION['email'])){
        return "<a href='../login.html'>Login</a>";
    } else{
        return "<a href='./logout.php'>Logout</a>";
    }
}

function welcome(){
    if(isset($_SESSION['firstName'])){
        $firstName_letter = substr($_SESSION['firstName'], 0, 1);

        return "<h3>$firstName_letter</h3>";
    } else{
        return null;
    }
}


function makeHeader(){
    $loginLogoutButton = checkUserLoggedIn();
    $shouldRegister = checkUserName();
    $welcome = welcome();
    print_r($_SESSION);
    $header = <<<HEADER
<header>
        <nav id="nav-bar">
            <div id="logo-container">
                <h1>
                    <a href="../index.html">Transit</a>
                </h1>
                <i class='bx bx-paper-plane' style="font-size: 20px;"></i>
            </div>
            <div id="menu"><i class='bx bx-menu' style="font-size: 20px; cursor: pointer;"></i></div>
            <div class="menu-container">
                <ul id="menu-list">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./aboutus.php">About Us</a></li>
                    <li><a href="./courses.php">Courses</a></li>
                    $shouldRegister
<!--                    <li><a href="../register.html">Register</a></li>-->
                </ul> 
                <div>
                    <div id="wireframe">
<!--                    <a href="../login.html">Login</a>-->
                        $loginLogoutButton
                </div>
                     <div id="toggle_close"><i class='bx bx-x' style="font-size: 30px;"></i></div>
            </div>
            <div style="height: 30px; width: 30px; background-color: black; border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center;">
            <h3>$welcome</h3>
        </div>
        </div>
        </nav>
        
    </header>
HEADER;
    $header .= "\n";
    return $header;
}