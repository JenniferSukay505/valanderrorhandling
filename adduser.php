<?php

$forename = $surname = $username = $password = $age = $email = "";

if (isset($_POST['forename']))
    $forename = fix_string($_POST['forename']);
if (isset($_POST['surname']))
    $surname = fix_string($_POST['surname']);
if (isset($_POST['username']))
    $username = fix_string($_POST['username']);
if(isset($_POST['password']))
    $password = fix_string($_POST['password']);
if (isset($_POST['age']))
    $age = fix_string($_POST['age']);
if (isset($_POST['email']))
    $email = fix_string($_POST['email']);

$fail=validate.forename($forename);
$fail=validate.surname($surname);
$fail=validate.username($username);
$fail-validate.password($password);
$fail=validate.age($age);
$email=validate.email($email);

echo "<!DOCTYPE html>\nhtml><head><title>An Example Form</title>";

if($fail == "")
{
    echo "</head><body>Form successfully validated:</body>";
}