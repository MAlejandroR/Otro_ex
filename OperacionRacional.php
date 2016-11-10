<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OperacionRacional
 *
 * @author manuel
 */
class OperacionRacional extends Operacion{
    //put your code here
    
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

}
