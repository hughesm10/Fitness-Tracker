<?php


$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "fitnesstracker";

$conn = mysqli_connect("localhost", "root", "", "fitnesstracker");

if (!$conn) {
    die("<script>alert('Connection failed.')</script>");
}