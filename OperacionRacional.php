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
    private $op1Racional;
    private $op2Racional;
    
    public function __construct($operacion) {
        parent::__construct($operacion);
        $this->op1Racional = new Racional ($this->op1);
        $this->op2Racional = new Racional ($this->op2);
        
    }

    
    public function __toString() {
         
        return ("$this->op1Racional".$this->operador."$this->op2Racional");
    }
    public function opera() {
            switch ($this->operador) {
                case '+':
                    $resultado = $this->op1Racional->sumar($this->op2Racional);
                    break;
                case '-':
                    $resultado = $this->op1Racional->restar($this->op2Racional);
                    break;
                case '*':
                    $resultado = $this->op1Racional->multiplicar($this->op2Racional);
                    break;
                case '/':
                    $resultado = $this->op1Racional->dividir($this->op2Racional);
                    break;
                default :
                    $resultado = FALSE;
            }
            return $resultado;
        }

}
