<?php
    session_start();
    unset($_SESSION);
    session_destroy();
    session_write_close();
    // header("location:search.php");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
?>