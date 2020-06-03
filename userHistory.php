<?php
    session_start();
    if (isset($_SESSION['pages']))
    {
        $_SESSION['pages'][] = $_SERVER['REQUEST_URI'];
    } 
    else{
        $_SESSION['pages'] = array();
        $_SESSION['pages'][] = $_SERVER['REQUEST_URI'];
    }
?>