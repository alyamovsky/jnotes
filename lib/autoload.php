<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//spl_autoload_extensions(".php"); // comma-separated list
//spl_autoload_register();

function __autoload($class)
{ 
	$class = str_replace('\\', '/', $class);
	require __DIR__  . '/../' . $class . '.php';
}