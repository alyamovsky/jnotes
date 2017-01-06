<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
//date_default_timezone_set('Europe/Moscow');
$user = [
    'login' => 'lb1955',
    'password' => 60158
];
$dsn = 'mysql:host=localhost;dbname=jnotes;charset=utf8';
$dblogin = 'db_admin';
$dbpass = 'yn34vHXPtWShemuu';

$root_path = __DIR__;
define('CLASSES_DIR', $root_path . '/classes/');
define('TEMPLATES_DIR', $root_path . '/templates/');

require 'lib/autoload.php';
require 'lib/func.php';
require 'lib/login.php';
