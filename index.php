<?php
    include('header.php');
    $osztaly->listData();
    if (isset($_POST['pontPlusz'])) {
        $osztaly->pontPlusz($_POST['hidden_id'], $_POST['hidden_pont']);
    }
    if (isset($_POST['pontMinusz'])) {
        $osztaly->pontMinusz($_POST['hidden_id'], $_POST['hidden_pont']);
    }
    include('footer.php');
?>