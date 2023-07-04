<?php

/**
 * Renvoie le nom de la page actuelle
 */
function pageName(){
    $uri = $_SERVER['REQUEST_URI'];
    $name = strrchr($uri, '/'); // /contact.php
    $name = substr($name, 1, -4); // contact

    if (empty($name)) {
        $name = 'index';
    }

    return $name;
}

/**
 * Permet de valider un email
 */
function validEmail(string $email): bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Permet d'afficher cehcked si une valeur est dans un tableau
 */
function checked(string $value, string $valueToCompare): string{
    return $value === $valueToCompare ? 'checked' : '';
}
?>