<?php
echo "PHP Works! (So does Nginx... Duh..)<br />";

$mysqli = new mysqli("mysql","docker","docker","docker");

if($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
	echo "MySQL works! <a href='pma'></a>";
}

echo "<hr />";

phpinfo();