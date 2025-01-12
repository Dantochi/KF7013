<?php
session_start();
session_unset(); // Unset the global vaiables associate with the sessionlo
session_destroy(); // This destroys the current session by making it null or empty
header("location:index.php"); // After the session has been destroyed, the user is  redirected to the index.php page