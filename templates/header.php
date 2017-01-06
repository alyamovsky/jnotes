<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>jNotes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="popover"]').popover();
            });
        </script>
    </head>
    <body>
        <header>
            <img class="logo" src="/img/logo.png" alt="">
            <nav>
                <ul>
                    <!--<li class="settings"><a href="#">Настройки</a></li>-->
                    <li class="logout"><a href="/logout.php">Выйти</a></li>
                </ul>
            </nav>

        </header>
        <main>