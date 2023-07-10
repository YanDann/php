<?php 

namespace App;

class Rectangle{

    protected int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function isValid(): bool{
        if ($this->width < 0 || $this->height < 0){
            return false;
        } 
        return true;
    }

    public function perimeter(){
        return $this->width * 2 + $this->height * 2;
    }

    public function area(){
        return $this->width * $this->height;
    }
}
