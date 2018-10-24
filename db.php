<?php
 session_start();
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "db_newton";

 $DB = new mysqli($host,$user,$pass,$db) or die($DB->error);

 
