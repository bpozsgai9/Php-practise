<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Prog nyelvek</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="links">
            <a href="index.php">Nyelvek listája</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="felvetel.php">Nyelvek felvétele</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="kezeles.php">Nyelvek kezelése</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="onertekeles.php">Önértékelés</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    <?php
        include('class.php');
        $osztaly = new Osztaly();
    ?>
    <h1>Prog nyelvek</h1>
    <div class="vonalHeader"></div>
    