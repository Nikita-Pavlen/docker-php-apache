<?php
$mysqli = new mysqli("mysql","root",'secret-Retouch812',"retouch_db");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
} else {
    echo 'connection ok!';
}