<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OperacionReal
 *
 * @author manuel
 */
class OperacionReal extends Operacion {

    public function __construct($operacion) {
        parent::__construct($operacion);
    }

    public function opera() {

        switch ($this->operador) {
            case '+':
                $resultado = $this->op1 + $this->op2;
                break;
            case '-':
                $resultado = $this->op1 - $this->op2;
                break;
            case '*':
                $resultado = $this->op1 * $this->op2;
                break;
            case '/':
                $resultado = $this->op1 / $this->op2;
                break;
            default :
                $resultado = FALSE;
        }
        return $resultado;
    }
public function __toString() {
    return "$this->op1 $this->operador $this->op2";
}
    //put your code here
}
