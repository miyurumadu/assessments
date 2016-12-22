<?php

include '../includes/dbconnection.php';
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$regno = $_SESSION["username"];
$sub = htmlspecialchars($_POST['subject']);
$ass = htmlspecialchars($_POST['ass']);
$grade = htmlspecialchars($_POST['grade']);



$sqlret = "select subject from asdata where regno='$regno'";
$result = $conn->query($sqlret);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($sub == $row["subject"]) {
            insert($ass, $sub, $grade, $regno);
            break;
        } else {
            add($ass, $sub, $grade, $regno);
            break;
        }
    }
} else {
    add($ass, $sub, $grade, $regno);
}

function insert($ass, $sub, $grade, $regno) {

    switch ($ass) {
        case "ICA01":

            $GLOBALS['$sql'] = "update asdata set ICA01='$grade' where regno='$regno' and subject='$sub'";
            break;

        case "ICA02":

            $GLOBALS['$sql'] = "update asdata set ICA02='$grade' where regno='$regno' and subject='$sub'";
            break;

        case "ICA03":

            $GLOBALS['$sql'] = "update asdata set ICA03='$grade' where regno='$regno' and subject='$sub'";
            break;

        default:
            break;
    }
}

function add($ass, $sub, $grade, $regno) {

    switch ($ass) {
        case "ICA01":

            $GLOBALS['$sql'] = "insert into asdata (regno,subject,ICA01,ICA02,ICA03) values ('$regno','$sub','$grade',null,null)";
            break;

        case "ICA02":

            $GLOBALS['$sql'] = "insert into asdata (regno,subject,ICA01,ICA02,ICA03) values ('$regno','$sub',null,'$grade',null)";
            break;

        case "ICA03":

            $GLOBALS['$sql'] = "insert into asdata (regno,subject,ICA01,ICA02,ICA03) values ('$regno','$sub',null,null,'$grade')";
            break;

        default:
            break;
    }
}

if (mysqli_query($conn, $GLOBALS['$sql'])) {
    echo 'Successfully Updated';
} else {
    echo 'post failed';
}
    