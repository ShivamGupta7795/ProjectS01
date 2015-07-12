<?php 
$varfile=fopen("xyz.txt","r") or die("file not found");
echo fread($varfile,"xyz.txt");
 ?>