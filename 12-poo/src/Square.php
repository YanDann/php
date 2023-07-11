<?php 

namespace App;

class Square extends Rectangle{

    public function __construct(int $width)
    {
        parent::__construct($width, $width);
    }
}

?>