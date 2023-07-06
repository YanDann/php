<?php

/**
 * Permet de se connecter à la BDD
 */
function db(): PDO {
    $db = new PDO('mysql:host=localhost;dbname=movies', 'root', '');

    return $db;
}

/**
 * Transformer un CSV en tableau PHP
 */
function convertCsvToArray(string $file): array {
    $file = fopen($file, 'r');

    $data = [];

    $headers = fgetcsv($file, null, ';');
    while ($line = fgetcsv($file, null, ';')) {

        $item = [];

        foreach ($line as $key => $value) {
            $item[$headers[$key]] = $value;
        }

        $data[] = $item;
    }

    return $data;
}

/**
 * Renvoie le nom de la page actuelle
 */
function pageName(){
    $uri = $_SERVER['REQUEST_URI'];
    $name = strrchr($uri, '/'); // /contact.php
    $name = substr($name, 1, -4); // contact

    return $name;
}

/**
 * Permet de valider un email
 */
function validEmail(string $email): bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Permet de valider des valeurs dans un tableau
 * ['html', 'toto'] => pas valide
 * ['html', 'php'] => valide
 */
function validArray(array $data, array $valid): bool{
    foreach ($data as $item){
        if (!in_array($item, $valid)){
            return false;
        }
    }
    return true;
}

/**
 * Permet d'afficher cehcked si une valeur est dans un tableau
 */
function checked(string $value, array $array): string{
    return in_array($value, $array) ? 'checked' : '';
}

/**
 * Permet de formatter une date US
 */

function formatDate(string $date, string $format = 'd/m/Y'){
    return date($format, strtotime($date));
}
