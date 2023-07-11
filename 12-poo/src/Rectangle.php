<?php 

namespace App;

class Rectangle{

    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function isValid(): bool{
        return ($this->width > 0 && $this->height > 0);
    }

    public function perimeter(): int{
        return $this->width * 2 + $this->height * 2;
    }

    public function area(): int{
        return $this->width * $this->height;
    }

    public function isBiggerThan(Rectangle $r){
        return $this->area() > $r->area();
    }
}
