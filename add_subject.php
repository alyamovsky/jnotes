<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';
$userData = filter_input(INPUT_POST, 'subject_title', FILTER_SANITIZE_SPECIAL_CHARS);
$userData = stripcslashes($userData);
$uploader = new \classes\Uploader;
$uploader->uploadSubject($userData);
$uploader->redirect();
