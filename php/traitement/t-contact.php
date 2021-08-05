<?php

if (isset($_POST['submit'])) {
    $to = "benjamindesenlis@gmail.com";
    $subject = $_POST['name'];
    $telnumber = $_POST['tel'];
    $message = $_POST['votremessage'];
    $from = $_POST['mail'];
    $headers = "From:" . $from;

    if (mail($to, $subject, $telnumber, $message, $headers)) {
        header("../../index.php");
    } else {
        echo "failed";
    }
}
