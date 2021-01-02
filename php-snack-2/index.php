<!-- name=giulia&email=giulianapoli@gmail.com&age=24 -->

<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$dot = stripos($email, '.');
$at = stripos($email, '@');

echo strlen($_GET['name']);
echo is_numeric($age);


if ((strlen($_GET['name']) > 3) && ($dot !== false) && ($at == true) && ($age == true)) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
};


?>