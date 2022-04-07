<?php

session_start();
$_SESSION['visitado']=-1;
//session_destroy();
header('location:session.php');

?>