<?php

$data = [];
$error = [];
$transaction = $_POST['transaction'];
$typeimmo = $_POST['typeimmo'];
$dateconstruction = $_POST['dateconstruction'];
$postal = $_POST['postal'];
$message = $_POST['message'];
$email = $_POST['mail'];


if (!empty($_POST)) {
    if (empty($_POST['transaction'])) {
        $error['transaction'] = ' Le champs transaction est requis';
    } else {

        if ($transaction == "vente") {
            $data['transaction'] = strip_tags($_POST['transaction']);
            echo $data['transaction'];
        }

        if ($transaction == "location") {
            $data['transaction'] = strip_tags($_POST['transaction']);
            echo $data['transaction'];
        }
    }

    if (empty($_POST['typeimmo'])) {
        $error['typeimmo'] = ' Le champs typeimmo est requis';
    } else {

        if ($typeimmo == "appartement") {
            $data['typeimmo'] = strip_tags($_POST['typeimmo']);
            echo $data['typeimmo'];
        }

        if ($typeimmo == "maison") {
            $data['typeimmo'] = strip_tags($_POST['typeimmo']);
            echo $data['typeimmo'];
        }
        if ($typeimmo == "local") {
            $data['typeimmo'] = strip_tags($_POST['typeimmo']);
            echo $data['typeimmo'];
        }
    }

    if (empty($_POST['dateconstruction'])) {
        $error['dateconstruction'] = ' Le champs date construction est requis';
    } else {

        if ($dateconstruction == "avant") {
            $data['dateconstruction'] = strip_tags($_POST['dateconstruction']);
            echo $data['dateconstruction'];
        }

        if ($dateconstruction == "pendant") {
            $data['dateconstruction'] = strip_tags($_POST['dateconstruction']);
            echo $data['dateconstruction'];
        }

        if ($dateconstruction == "local") {
            $data['dateconstruction'] = strip_tags($_POST['dateconstruction']);
            echo $data['dateconstruction'];
        }
    }

    if (empty($_POST['superficie'] || strlen($_POST['superficie'] <= 3))) {
        $error['superficie'] = ' Le champs superficie est requis';
    } else {
        $data['superficie'] = strip_tags($_POST['superficie']);
    }

    if (empty($_POST['name'] || strlen($_POST['name'] <= 3))) {
        $error['name'] = ' Le champs nom est requis';
    } else {
        $data['name'] = strip_tags($_POST['name']);
    }

    if (empty($_POST['tel'])) {
        $error['tel'] = ' Le champs téléphone est requis';
    } else {
        $data['tel'] = strip_tags($_POST['tel']);
        echo $data['tel'];
    }

    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($_POST['mail']);
        $data['mail'] = strip_tags($_POST['mail']);
    } else {
        $error['mail'] = "L\'adresse mail" . $_POST['mail'] . " est considérée comme invalide.";
    }

    if (empty($_POST['ville'])) {
        $error['ville'] = ' Le champs ville est requis';
    } else {
        $data['ville'] = strip_tags($_POST['ville']);
        echo $data['ville'];
    }

    if (empty($_POST['postal'] || strlen($_POST['postal'] <= 3))) {
        $error['postal'] = ' Le champs postal est requis';
    } else {
        $data['postal'] = strip_tags($_POST['postal']);
        echo $data['postal'];
    }
    if (empty($_POST['message'] || strlen($_POST['message'] <= 3))) {
        $error['message'] = ' Le champs nom est requis';
    } else {
        $data['message'] = strip_tags($_POST['message']);
    }

    $retour = mail('benoutestmail.gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mail']);
    if ($retour)
        echo '<p>Votre message a été envoyé.</p>';
    else
        echo '<p>Erreur.</p>';
}




<?php

$data = [];
$error = [];

if (!empty($_POST)) {
    if (empty($_POST['transaction'])) {
        $error['transaction'] = ' Le champs transaction est requis';
    } else {

        if ($transaction == "vente") {
            $data['transaction'] = strip_tags($_POST['transaction']);
            echo $data['transaction'];
        }

        if ($transaction == "location") {
            $data['transaction'] = strip_tags($_POST['transaction']);
            echo $data['transaction'];
        }
    }

    if (empty($_POST['typeimmo'])) {
        $error['typeimmo'] = ' Le champs typeimmo est requis';
    } else {

        if ($typeimmo == "appartement") {
            $data['typeimmo'] = strip_tags($_POST['typeimmo']);
            echo $data['typeimmo'];
        }

        if ($typeimmo == "maison") {
            $data['typeimmo'] = strip_tags($_POST['typeimmo']);
            echo $data['typeimmo'];
        }
        if ($typeimmo == "local") {
            $data['typeimmo'] = strip_tags($_POST['typeimmo']);
            echo $data['typeimmo'];
        }
    }

    if (empty($_POST['dateconstruction'])) {
        $error['dateconstruction'] = ' Le champs date construction est requis';
    } else {

        if ($dateconstruction == "avant") {
            $data['dateconstruction'] = strip_tags($_POST['dateconstruction']);
            echo $data['dateconstruction'];
        }

        if ($dateconstruction == "pendant") {
            $data['dateconstruction'] = strip_tags($_POST['dateconstruction']);
            echo $data['dateconstruction'];
        }

        if ($dateconstruction == "local") {
            $data['dateconstruction'] = strip_tags($_POST['dateconstruction']);
            echo $data['dateconstruction'];
        }
    }

    if (empty($_POST['superficie'] || strlen($_POST['superficie'] <= 3))) {
        $error['superficie'] = ' Le champs superficie est requis';
    } else {
        $data['superficie'] = strip_tags($_POST['superficie']);
    }

    if (empty($_POST['name'] || strlen($_POST['name'] <= 3))) {
        $error['name'] = ' Le champs nom est requis';
    } else {
        $data['name'] = strip_tags($_POST['name']);
    }

    if (empty($_POST['tel'])) {
        $error['tel'] = ' Le champs téléphone est requis';
    } else {
        $data['tel'] = strip_tags($_POST['tel']);
        echo $data['tel'];
    }

    if (empty($_POST['mail'] || strlen($_POST['mail'] <= 3))) {
        $error['mail'] = ' Le champs email est requis';
    } else {
        $data['mail'] = strip_tags($_POST['mail']);
    }

    if (empty($_POST['ville'])) {
        $error['ville'] = ' Le champs ville est requis';
    } else {
        $data['ville'] = strip_tags($_POST['ville']);
        echo $data['ville'];
    }

    if (empty($_POST['postal'] || strlen($_POST['postal'] <= 3))) {
        $error['postal'] = ' Le champs epostal est requis';
    } else {
        $data['postal'] = strip_tags($_POST['postal']);
    }
    if (empty($_POST['message'] || strlen($_POST['message'] <= 3))) {
        $error['message'] = ' Le champs nom est requis';
    } else {
        $data['message'] = strip_tags($_POST['message']);
    }

    $retour = mail('benoutestmail.gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
    if ($retour)
        echo '<p>Votre message a été envoyé.</p>';
    else
        echo '<p>Erreur.</p>';
}
