<?php

function checkRole($userRole)
{
    session_start();
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== $userRole) {
        header("Location:../login.php");
        exit;
    }
}