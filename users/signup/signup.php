<?php
if(!$_POST)
    exit;
$email = $_POST[email];
$username = $_POST[username];
$password = $_POST[password];
$firstname = $_POST[first_name];
$lastname = $_POST[last_name];
$dataline = "$email|$password|$username|$firstname|$lastname";
if (empty($email) || empty($username) || empty($password) || empty($firstname) || empty($lastname))
{
    echo "<h1>All Fields are required</h1>";
    exit;
}
if(strchr($email,"|"))
{
    echo "<h1>Forbidden character '|'</h1>";
    exit;
}

file_put_contents("../database/database.txt", "$dataline\n", FILE_APPEND);
echo "<br><h1>Registration Successful !<h1></br>";
echo "<br><button class='btn' onclick='window.location.href=\"../login/login.html\"'>You can Login to Your Account now</button></br>";?>