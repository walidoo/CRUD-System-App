<?php require_once './lib/enter.php'; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user=new enter();

$user->fname= $_POST["fname"];
$user->lname= $_POST["lname"];
$user->age= $_POST["age"];
$user->dept= $_POST["dept"];

$enter=$user->enter_data();

?>