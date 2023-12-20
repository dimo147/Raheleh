<?php
$host_name = 'db5014435154.hosting-data.io';
$username = 'dbu1598703';
$password = 'Nemat1319';
$database = 'dbs12003862';

$db = new mysqli($host_name, $username, $password, $database);

if ($db->connect_errno) {
    printf("Connection failed %s\n", $db->connect_error);
    exit();
}

?>