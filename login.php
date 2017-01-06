<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';

//var_dump($_POST);
if (isset($_POST['do_login'])) {
    if (($_POST['login'] == $user['login']) && ($_POST['password'] == $user['password'])) {
        $_SESSION['logged_user'] = $user['login'];
        header('Location: /');
    }
}
$template = new \classes\View();
$template->assign('login', $data = []);
$template->display('login');
