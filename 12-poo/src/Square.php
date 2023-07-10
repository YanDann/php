<?php 

namespace App;

class Square extends Rectangle{

    public function __construct(int $width)
    {
        $this->width = $width;
    }

    public function perimeter(){
        return $this->width *= $this->width;
    }

    public function isBiggerThen(Rectangle $r){
        return $this->perimeter() < $r->perimeter() ? "true" : "false";
    }
}

?>