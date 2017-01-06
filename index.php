<?php
require_once 'config.php';
$index = new \classes\Models\Index;
$data = $index->returnIndex();
$template = new \classes\View();
$template->assign('index', $data);
$template->display('index');
