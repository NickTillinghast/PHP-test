<?php 
$db_user = 'root';
$db_password = '';
$db_name = 'test';
$db_host = 'localhost';

$mysqli = new mysqli($$db_host, $db_user, $db_password, $db_name);

if ($mysqli->connect_errno) {
    printf("Connect failed: ", $mysqli->connect_error);
    exit();
}

$people_table = 
"CREATE TABLE IF NOT EXISTS people (
    ID bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR NOT NULL,
    age INT NOT NULL,
    email VARCHAR NOT NULL,
    PRIMARY KEY (ID)
    )";

if ($mysqli->query($people) === true) {
    printf('Table people successfully created.\n');
}





?>