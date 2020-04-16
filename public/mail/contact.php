<?php

$recepient = "alexchaika1987@gmail.com";
$siteName = "bestproperty.ml";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$textarea = trim($_POST["textarea"]);

$message = "Имя: $name \nТелефон: $phone \nПочта: $email \nКоментарий $textarea";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>