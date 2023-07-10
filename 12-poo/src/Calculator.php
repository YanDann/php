<?php 

namespace App;

class Calculator{

    private int $result = 0;

    public function __construct()
    {
        
    }

    public function add(int $add){
        $this->result += $add;
        return $this;
    }

    public function substract(int $sub){
        $this->result -= $sub;
        return $this;
    }

    public function multiply(int $mult){
        $this->result *= $mult;
        return $this;
    }

    public function divide(int $divide){
        $this->result /= $divide;
        return $this;
    }

    public function result(){
        return $this->result;
    }
}

?>
