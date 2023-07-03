<?php 

function acronyme(string $string): string{
    $string = explode(' ', $string);
    
    foreach ($string as $letter)  {
        $result[] = substr($letter, 0, 1);
    }
    
    return strtoupper(implode($result));
}

function conjug(string $string): string{
    $pronoms = [
        'Je',
        'Tu',
        'Il / Elle',
        'Nous',
        'Vous',
        'Ils / Elles',
    ];

    $present = [
        'e',
        'es',
        'e',
        'ons',
        'ez',
        'ent',
    ];

    $stringconjug = substr($string, 0, strlen($string) - 2);
    $verbeconjug[] = '';
    for ($i = 0; $i < count($present); $i++) {
        $verbeconjug[] = $pronoms[$i] . " " . $stringconjug . $present[$i] . " <br>";
    }

    if ($string) {
        return implode($verbeconjug);
    }

    return "";
}

?>