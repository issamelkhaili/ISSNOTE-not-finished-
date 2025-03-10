<?php
$database = file("../database/database.txt");
$userid = 0;
$i;
if(!$_POST)
    exit;
while((strpos($database[$userid], $_POST['email']) === false) && ($database[$userid] != "_______DATABSE_END________"))
    $userid++;
if(!strpos($database[$userid],$_POST[email]))
{
    echo "User Not Found";
    exit;
}
$i = strpos($database[$userid],$_POST[email]);
$data = explode("|",$database[$userid]);
$email = $data[0];
$password = $data[1];
$username = $data[2];
if($_POST[password] != $password)
{
    echo "Incorrect Password";
    exit;
}
else
{
    echo "Welcome Back $username !";
    exit;
}
?>