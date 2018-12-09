<?php
$email = trim($_POST["email"]);
$text = trim($_POST["textMsg"]);
$title = 'contact mail';

$letter = "Mail : $email \n Text : $text";

mail("bcharly49@gmail.com", $title, $letter);