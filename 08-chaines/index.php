<?php 

/**
 * Fonctions sur les chaines
 */

 // On peut estraires des chaines
 $email = 'fiorella@boxydev.com';
 $domaine = strstr($email, '@'); //@boxydev.com
 $domaine = substr($domaine, 1); //boxydev.com
 $username = strstr($email, '@', true); // fiorella

 echo "Le nom d'utilisateur est $username <br>";
 echo "Le domaine est $domaine <br>";

// Vérifier qu'une chaine contient un truc
if (str_contains($email, 'boxydev')) {
    echo "L'email $email contient boxydev <br>";
}

// On peut remplacer des termes dans une chaine
echo 'Email anonyme :';
echo str_replace('fiorella', '********', $email).'<br>';

// en PHP, une chaine est un tableau
foreach (str_split($username) as $letter) {
    echo "$letter - ";
}

echo "<br>";

// substr
echo substr($email, 0, 8).'<br>'; // fiorella
echo substr($email, 9, -4).'<br>'; // boxydev
echo substr($email, -3).'<br>'; // com

// Transformer des chaines en tableau
$countries = 'Italie, France, Portugal';
$countries = explode(', ', $countries); // => chaine en tableau
var_dump($countries);

echo '<br>';
echo implode(' / ', $countries); // => tableau en chaine

// Quelques fonctions pour les formulaires
$password = 'azerty123        ';
$password = trim($password); // => 'azerty123' (retrait des espaces)
echo '<br>';
var_dump($password);
echo '<br>';

echo "Le mot de passe $password fait ".strlen($password)." caractères. <br>";

// Exemple de faille XSS
$message = $_GET['message'] ?? null;

// On desactive l'interpretation du HTML
$message = htmlspecialchars($message ?? '');
// strip_tags($message); // Supprime les balises

echo $message;

?>