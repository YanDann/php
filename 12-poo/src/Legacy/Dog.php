<?php

namespace App\Legacy;

// Une classe abstraite est non instanciable
class Dog extends Animal
{
    public function breathe()
    {
        return 'Le chien respire';
    }
}
