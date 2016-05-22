<?php
session_start();
require('header.php');
//Kod som handlar om variabel

if(isset($_GET['page'])&&($_GET['page']!="")) {
$page=$_GET['page'];

   if (file_exists("views/{$page}.php"))  {
    require("views/{$page}.php");}
    else require('views/main.php');

}

else require('views/main.php');

require('footer.php');
