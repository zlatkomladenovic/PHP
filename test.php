<?php

$firstName = 'Zlatko';
$lastName = 'Mladenovic';
$title = '"The Hitchhiker\'s Guide to the Galaxy"';
$autor = 'Douglas Adams';
$answer = 42;
$newlines = "\r\n\r\n";

$fullname = "$firstName $lastName";
$book = "$title by $autor";

// echo $fullname . '<br>';
// echo $book;

$message = "Name: $fullname $newlines";
$message .= "Book: $title $newlines";
$message .= "Answer: $answer";

echo $message;