<?php
$link = mysql_connect('sentia-ta-db.mysql.database.azure.com', 'db_admin1@Sentia-TA-DB', 'Sub.123As>!3dfa');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
