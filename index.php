<?php
echo "<h1>Hello OpenShift! 2018-07-29<h1>";
echo "Greetings:";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
