<?php

$NGOname = $_POST["NGOname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$messageA = $_POST["messageA"];
$messageB = $_POST["messageB"];
$messageC = $_POST["messageC"];


$host = "127.0.0.1";
$dbname = "ethiodebo";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO ngoform (NGOname, email, phone, messageA, messageB, messageC)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssss", $NGOname, $email, $phone, $messageA, $messageB, $messageC);

mysqli_stmt_execute($stmt);

echo "Record saved";
