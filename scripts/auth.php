<?php

include '../includes/dbconnection.php';
include '../includes/PasswordHash.php';

$user = htmlspecialchars($_POST['user']);
$pw = htmlspecialchars($_POST['pw']);

$sql2 = "select stname,regno,password from student";
$result = $conn->query($sql2);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        if ($user == $row["regno"] && (password_verify($pw, $row["password"]))) {
            session_start();
            $_SESSION["username"] = $user;
            $_SESSION["fullname"] = $row["stname"];


            header("Location:http://localhost:1234/asm/index.php");
        }
    }
} else {
    echo "0 results";
}

