<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!isset($_SESSION['logged_user']) && ($_SERVER['REQUEST_URI'] != '/login.php')) {
    header('Location: /login.php');
}