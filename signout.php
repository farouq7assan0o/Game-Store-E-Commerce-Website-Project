<?php
session_start();
session_destroy();
header("Location: signin.html"); // Redirect to the sign-in page
exit();
?>
