<?php
session_start();
require_once 'function.php';
require_once 'variable.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List bonnets</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://cdn-icons-png.flaticon.com/512/33/33806.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Beau Nez
        </a>
        <h2>
        <?php
        if ($_SESSION){
            echo $_SESSION['email'];
            ?>
            <a href="http://localhost/exoPHP/logout.php" class="btn btn-dark">Deconexion</a>
            <?php
        }
        ?>
        </h2>
    </div>
</nav>
