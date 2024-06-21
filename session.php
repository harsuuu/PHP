<?php

session_start();

$_SESSION['username']="harsh";
$_SESSION['category']="books";

echo "Session has been set";


//for destroying the session
// session_unset();
// session_destroy();
// echo "Session has destroyes successfully";
?>