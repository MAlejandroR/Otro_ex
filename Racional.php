<?php

class Racional {

    private $num;
    private $den;

    public function __construct($num, $den) {
        //opciones new Racional () =>1/1
        //opciones new Racional (5) =>5/1
        //opciones new Racional (5,2) =>5/2
        //opciones new Racional ("5/2") =>5/2
        //Otra sitiación no se instancia
        if (is_null($den)) {
            switch (is_numeric($num)) {
                case true:
                    $this->num = $num;
                    $this->den = 1;
                    break;
                case false:
                    if (is_null($num)) {
                        $this->num = $num;
                        $this->den = 1;
                    } else {
                        $this->num = (int) $num;
                        $this->den = substr($num, strpos($num, "/") + 1);
                    }
                    break;
            }
        } else {
            $this->num = $num;
            $this->den = $den;
        }
    }

    public function sumar(Racional $op1) {
        $op1 = $this->num * $op1->den + $this->den * $op1->num;
        $op2 = $this->den * $op1->den;
        return new Racional($op1, $op2);
    }

    public function restar(Racional $op1) {
        $op1 = $this->num * $op1->den - $this->den * $op1->num;
        $op2 = $this->den * $op1->den;
        return new Racional($op1, $op2);
    }

    public function multiplicar(Racional $op1) {
        $op1 = $this->num * $op1->num;
        $op2 = $this->den * $op1->den;
        return new Racional($op1, $op2);
    }

    public function dividir(Racional $op1) {
        $op1 = $this->num * $op1->den;
        $op2 = $this->den * $op1->num;
        return new Racional($op1, $op2);
    }
    
    public function __toString() {
        return ($this->num."/".$this->den);
    }

}
