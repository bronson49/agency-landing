<?php
$email = trim($_POST["email"]);
$title = 'subscribe';

$letter = " Mail : $email \n Text : need subscribe";

mail("bcharly49@gmail.com", $title, $letter);