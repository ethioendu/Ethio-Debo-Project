<?php

$name = $_POST["name"];
$other = $_POST["other"];


var_dump($name, $other);


$host = "127.0.0.1";
$dbname = "ethiodebo";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);


if (mysqli_connect_errno()) {
    die("connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO project1  (name, other)
        VALUES (?)";

$stmt = mysqli_stmt_init($conn);


if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss", $name, $other);

mysqli_stmt_execute($stmt);

echo "Record saved";
