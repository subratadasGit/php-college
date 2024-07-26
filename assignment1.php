<?php
echo "<p>PHP version: ".phpversion()."</p>";
echo "<p>ROOT DIRECTORY: ".dirname(__FILE__)."</p>";
echo "<p>Current File: ".$_SERVER['PHP_SELF']."</p>";
echo "<p>ServerName:".$_SERVER['SERVER_NAME']."</p>" ;
echo "<p>Request method used to access the page ".$_SERVER['REQUEST_METHOD']."</p>" ;
echo "server, Name and version of the protocol via which the page was requested, ".$_SERVER['SERVER_PROTOCOL']."</p>" ;
echo "<p>IP address from where the user is viewing the current page, ".$_SERVER['REMOTE_ADDR']."</P>" ;
echo "<p>Port on server being used for communication. ".$_SERVER['SERVER_PORT']."</P>" ;
echo "Hostname from where the user is viewing the current page, ".$_SERVER['HTTP_HOST']."</P>" ;
?>
