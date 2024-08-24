<?php 

$con = new mysqli('localhost', 'root', 'Hareeb8542', 'tetralab');

if ($con -> connect_error){
   die("connection fail: " . $con-> connect_error); 
}


