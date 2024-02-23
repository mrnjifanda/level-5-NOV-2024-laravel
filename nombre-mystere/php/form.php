<?php

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

        header('Location: /?message=page+not+found');
        exit();
    }

    if (!isset($_POST['number']) || empty($_POST['number'])) {

        header('Location: /?message=Saisir+un+nombre');
        exit();
    }
    
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'File.php';

    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'file.txt';
    $file = new File($filename);
    $find_number = $file->getFile();

    $max_number = 100;
    $form_number = htmlentities($_POST['number']);

    if (!is_numeric($form_number)) {

        header('Location: /?message=Please+enter+a+valid+number');
        exit();
    }

    if ($form_number == $find_number) {

        $random = rand(1, $max_number);
        $file->setFile($random);
        header('Location: /?message=Success');
        exit();
    }

    $message = 'Votre+nombrer+est+plus+petit';
    if ($form_number >= $find_number) {

        $message = 'Votre+nombrer+est+plus+grand';
    }

    header('Location: /?message=' . $message);
    exit();
