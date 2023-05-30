<?php

function connectToDB() {
    $host = 'devkinsta_db'; // change this to devkinsta_db
    $dbname = 'feedback_form'; // use your own database name
    $dbuser = 'root';
    $dbpassword = 'JlM9YL7mge6ghuLi'; // use your own password

    $database = new PDO (
        "mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword
    );

    return $database;
}