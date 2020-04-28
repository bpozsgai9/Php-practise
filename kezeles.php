<?php
    include('header.php');
    $osztaly->listKezeles();
    if (isset($_POST['megjelenites'])) {
        $osztaly->megjelenit($_POST['hidden_id']);
    }
    if (isset($_POST['elrejtes'])) {
        $osztaly->elrejt($_POST['hidden_id']);
    } 
    include('footer.php');
?>