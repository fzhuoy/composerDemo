<?php
$con = mysql_connect("localhost","root","xiangtan");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "mysql good \n";
phpinfo();
