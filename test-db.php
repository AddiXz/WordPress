<?php
     //PATH TO YOUR FILE
     require_once('wp-config.php');
     //using wp-config variables 
     $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
     if (!$link) {
          die('Could not connect: ' . mysql_error());
     }
     echo 'Connected successfully';
     mysql_close($link);
     ?>
