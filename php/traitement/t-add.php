<?php
session_start(); // On démarre la session AVANT toute chose


// j'initialise 2 tableau vide pour stocké mes datas traité et mes erreur de validation
$data = [];
$error = [];
$folder = 'avatarfolder';
// faire un tableau 


if (!empty($_POST)) {

    if (empty($_POST['title'] || strlen($_POST['title'] <= 3))) {
        $error['title'] = ' Le champs titre est requis';
    } else {
        $data['title'] = strip_tags($_POST['title']);
    }

    if (empty($_POST['texte'] || strlen($_POST['texte'] <= 3))) {
        $error['texte'] = ' Le champs année est requis';
    } else {
        $data['texte'] = strip_tags($_POST['texte']);
    }

    if (empty($_POST['date'] || strlen($_POST['date'] <= 3))) {
        $error['date'] = ' Le champs date est requis';
    } else {
        $data['date'] = strip_tags($_POST['date']);
    }

    if (!empty($_FILES)) {
        // if (!is_dir($folder)) {

        //     mkdir($folder, 0755);
        // } 

        $temp = explode(".", $_FILES["picture"]["name"]);
        $temp[2] = rand(0, 30000); //Set to random number
        $fileName = $temp[0] . "_" . $temp[2] . "." . $temp[1];
        $data['picture'] = strtolower($fileName);
        // var_dump($tmp_name);
        // var_dump($temp);
        // var_dump($fileName);
        // die;
        // var_dump($_FILES['picture']);
        // die;
        // move_uploaded_file($_FILES["picture"]['tmp_name'], "./assets/img/avatarfolder/" . $fileName);

        // echo "Stored in: " . "../../assets/img/avatarfolder" . $_FILES["picture"]['name'];




        if (file_exists("avatarfolder/" . $fileName)) {
            echo $fileName . " already exists. ";
        } else {
            move_uploaded_file($_FILES["picture"]["tmp_name"], "../../assets/img/avatarfolder/" . $fileName);

            // echo "Stored in: " . "../../assets/img/avatarfolder" . $fileName;
        }
    } else {
        $data['picture'] = null;
    }
}

if (!empty($error)) {
    foreach ($error as $e) {
        echo $e . '<br>';
    }
    die;
}

var_dump($_POST);
var_dump($_FILES);
die();

require_once 'C:\wamp64\www\GoodDiagV2\php\include\database.php';

$req = $db->prepare('INSERT INTO articles(title, texte, date, picture) VALUES(:title, :texte, :date, :picture)');
$req->execute($data);
header('Location:../../admin.php');


echo 'Les infos ont bien été ajoutées !';