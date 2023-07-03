<?php

function square(int $number)
{
    return $number * $number;
}

function airRectangle(int $longueur, int $largeur)
{
    return $longueur * $largeur;
}

function airCircle(int $rayon)
{
    return pi() * $rayon * $rayon;
}

function priceTTC(int $price, int $taux)
{
    return $price + (1 + $taux / 100) . "€";
}

function priceTTCtoHT(int $price, int $taux, bool $convert)
{

    return $convert == true ? "Prix TTC => " . $price + (1 + $taux / 100) . "€" : "Prix HT => " . $price . "€";
}

/**
 * Permet de traduir un jour / mois anglais en français
 */
function translate(string $string): string
{
    $daysNmonths = [
        'Monday' => 'Lundi',
        'Tuesday' => 'Mardi',
        'Wednesday' => 'Mercredi',
        'Thursday' => 'Jeudi',
        'Friday' => 'Vendredi',
        'Saturday' => 'Samedi',
        'Sunday' => 'Dimanche',
        'January' => 'Janvier',
        'February' => 'Fevrier',
        'March' => 'Mars',
        'April' => 'Avril',
        'May' => 'Mai',
        'June' => 'Juin',
        'July' => 'Juillet',
        'August' => 'Aout',
        'September' => 'Septembre',
        'October' => 'Octobre',
        'November' => 'Novembre',
        'December' => 'Decembre',
    ];

    return str_replace(array_keys($daysNmonths), $daysNmonths, $string);
}
?>
