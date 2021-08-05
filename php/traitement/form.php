<?php
var_dump($_POST);

$data = [];
$error = [];

$transaction = $_POST['transaction'];
$typeimmo = $_POST['typeimmo'];
$dateconstruction = $_POST['dateconstruction'];
$postal = $_POST['postal'];
$message = $_POST['message'];
$email = $_POST['mail'];

mail('benoutestmail@gmail.com', 'formulaire de devis', $transaction,);
