<?php 

function square(int $number){
    return $number * $number;
}

function airRectangle(int $longueur, int $largeur){
    return $longueur * $largeur;
}

function airCircle(int $rayon){
    return pi() * $rayon * $rayon;
}

function priceTTC(int $price, int $taux) {
    return $price + (1+ $taux / 100) . "€";
}

function priceTTCtoHT(int $price, int $taux, bool $convert) {

    return $convert == true ? "Prix TTC => " . $price + (1 + $taux / 100) . "€" : "Prix HT => " . $price . "€";

}

?>
