<?php
include "includes/header.php";
session_destroy();
header("Location: http://localhost/exoPHP/login.php");
exit;