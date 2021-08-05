<?php
session_start(); // On démarre la session AVANT toute chose

require_once 'C:\wamp64\www\GoodDiagV2\php\include\database.php';



$data = [];
$errors = [];
$sql = '';

if (!empty($_POST)) {
    $id = htmlspecialchars($_POST['id']);
    if (empty($_POST['title'] || strlen($_POST['title'] <= 3))) {
        $error['title'] = ' Le champs titre est requis';
    } else {
        $data['title'] = strip_tags($_POST['title']);
    }

    if (empty($_POST['texte'] || strlen($_POST['texte'] <= 3))) {
        $error['texte'] = ' Le champs texte est requis';
    } else {
        $data['texte'] = strip_tags($_POST['texte']);
    }

    if (empty($_POST['date'] || strlen($_POST['date'] <= 3))) {
        $error['date'] = ' Le champs date est requis';
    } else {
        $data['date'] = strip_tags($_POST['date']);
    }

    if (!empty($_FILES)) {
        //gestion d'image
        $dossier = 'avatarfolder';
        $fichier = $_FILES['picture']['name'];
        $taille_maxi = 100000;
        $taille = filesize($_FILES['picture']['tmp_name']);
        $extensions = array('.png', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['picture']['name'], '.');


        //Début des vérifications de sécurité...
        if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau c'est queele n'est pas valide
        {
            $errors['picture'] = 'Vous devez uploader un fichier de type png, jpg, ou jpeg...';
        }

        if ($taille > $taille_maxi) {
            $errors['picture_size'] = 'Le fichier est trop gros...';
        }

        if (!isset($errors['picture']) && !isset($errors['picture_size'])) //S'il n'y a pas d'erreur, on upload
        {

            $temp = explode(".", $_FILES["picture"]["name"]);
            $temp[2] = rand(0, 30000); //Set to random number
            $fileName = $temp[0] . "_" . $temp[2] . "." . $temp[1];
            $data['picture'] = strtolower($fileName);

            if (file_exists("../../assets/img/avatarfolder/" . $fileName)) {
                echo $fileName . " already exists. ";
            } else {
                move_uploaded_file($_FILES["picture"]["tmp_name"], "../../assets/img/avatarfolder/" . $fileName);
            }

            // if (!empty($data['picture'])) {
            //     $sql = "UPDATE vins SET name = :name, year = :year, grapes = :grapes, country = :country, region = :region, description = :description, picture = :picture WHERE id = $id";
            // } else {
            //     $sql = "UPDATE vins SET name = :name, year = :year, grapes = :grapes, country = :country, region = :region, description = :description WHERE id = $id";
            // }


            $sql = "UPDATE articles SET title = :title, texte = :texte, date = :date, picture = :picture WHERE id = $id";
            $req = $db->prepare($sql);
            $req->execute($data);
            header('Location:../../update.php');
        } else {
            $errors['empty-post'] = 'aucune données';
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        }
    }
}