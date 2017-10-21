<?php

ob_start();

session_start();

unset($_SESSION['name']);

session_destroy();

header('Location: index1.html');
ob_end_flush();
?>