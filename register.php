<?php

// $ime = $prezime = $godina = $email = $password = $retypepassword = $drzava = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $ime = test_input($_POST["ime"]);
//   $prezime = test_input($_POST["prezime"]);
//   $godina = test_input($_POST["godina"]);
//   $email = test_input($_POST["email"]);
//   $password = test_input($_POST["password"]);
//   $retypepassword = test_input($_POST["retypepassword"]);
//   $drzava = test_input($_POST["drzava"]);
// }

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }

$error = 0;

if (!isset($_POST['ime']) && strlen(trim($_POST['ime'])) == 0) { $error++; }
if (!isset($_POST['prezime']) && strlen(trim($_POST['prezime'])) == 0) { $error++; }
if (!isset($_POST['rodenden']) && strlen(trim($_POST['rodenden'])) == 0) { $error++; }
if (!isset($_POST['email']) && strlen(trim($_POST['email'])) == 0) { $error++; }
if (!isset($_POST['pwd1']) && strlen(trim($_POST['pwd1'])) == 0) { $error++; }
if (!isset($_POST['pwd2']) && strlen(trim($_POST['pwd2'])) == 0) { $error++; }
if (!isset($_POST['drzava']) && strlen(trim($_POST['drzava'])) == 0) { $error++; }

if ($error == 0 && trim($_POST['pwd1']) == trim($_POST['pwd2'])) {
	echo "Uspeshno ste registrirani!";
} else {
	echo "Nekoi podatoci se pogreshno vneseni"; 
}

?>