<?php
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["messg"]);
$title = 'main message';

$letter = "Name : $name \n Mail : $email \n Text : $text";

mail("bcharly49@gmail.com", $title, $letter);