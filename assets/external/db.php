<?php

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "admin"); // set database user
define ("DB_PASS","austin67"); // set database password
define ("DB_NAME","hcr"); // set database name


$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Couldn't make connection.");
//$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
?>