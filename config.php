<?php
define("DB_SERVER", "127.0.0.1");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "db_latihan1");


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
