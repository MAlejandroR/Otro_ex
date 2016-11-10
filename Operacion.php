<?php

require'Racional.php';

abstract class Operacion {

    //put your code here
    protected $op1;
    protected $op2;
    protected $operador;
    static protected $tipo;

    const RACIONAL = -1;
    const REAL = 1;

    public static function tipoOperacion($operacion) {
        
        //if (ereg("\[09][+-*/][09]\\", $operacion))
        //    return self::REAL;
       // else
       // */
            return self::RACIONAL;
    }

    public function __construct($operacion) {
        $this->operador = $this->obtenerOperador($operacion);
        $this->op1 = $this->obtenerOperador1($operacion);
        $this->op2 = $this->obtenerOperador2($operacion);
    }

    private function obtenerOperador1($operacion) {
        $pos = strpos($operacion, $this->operador);
        return(substr($operacion, 0, $pos));
    }

    private function obtenerOperador2($operacion) {
        $pos = strpos($operacion, $this->operador);
        return (substr($operacion, $pos + 1));
    }

    private function obtenerOperador($operacion) {
        $pos = FALSE;
        if (($pos = strpos($operacion, "+")) !== FALSE) {
            $this->tipo = (strpos($operacion, "/")) ? $this::RACIONAL : $this::REAL;
            return "+";
        }
        if (($pos = strpos($operacion, "-")) !== FALSE) {
            $this->tipo = (strpos($operacion, "/")) ? $this::RACIONAL : $this::REAL;

            return "-";
        }
        if (($pos = strpos($operacion, "*")) !== FALSE) {
            $this->tipo = (strpos($operacion, "/")) ? $this::RACIONAL : $this::REAL;
            return "*";
        }
        if (($pos = strpos($operacion, ":")) !== FALSE) {
            $this->tipo = $this::RACIONAL;
            return ":";
        }
        if (($pos = strpos($operacion, "/")) !== FALSE) {
            $this->tipo = $this::REAL;
            return "/";
        }
        return $pos;
    }

    public function getOp1() {
        return $this->op1;
    }

    public function getOp2() {
        return $this->op2;
    }

    public function getOperador() {
        return $this->operador;
    }

    public function getTipo() {
        return $this->tipo;
    }

    abstract public function opera();
            
/*
 * if ($this->tipo == $this::RACIONAL) {
            $op1 = new Racional($this->op1);
            $op2 = new Racional($this->op2);
            switch ($this->operador) {
                case '+':
                    $resultado = $op1->sumar($op2);
                    break;
                case '-':
                    $resultado = $op1->restar($op2);
                    break;
                case '*':
                    $resultado = $op1->multiplicar($op2);
                    break;
                case '/':
                    $resultado = $op1->dividir($op2);
                    break;
            }
        } else {
            switch ($this->operador {
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
            }
        }
        return $resultado;

 */
}
