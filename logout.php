<?php
//starting session
session_start();

//destroying session
session_destroy();

//redirecting back to homepage
header('Location: index.php');
?>