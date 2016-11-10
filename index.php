<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'Operacion.php';
        require 'OperacionRacional.php';
        $operacion = "5+6/1";
      //  $op1 = new Operacion("57asfasdfa6");
        
        echo ("tipo de operacon");
        
        if (Operacion::tipoOperacion($op1) == Operacion::RACIONAL){
            $op1 = new OperacionRacional ( $operacion);
            $op2 = new OperacionRacional ( $operacion);
            
        }
        else{
            $op1 =   $op1->getOp1();
            $op2 = ( $op1->getOp2());
        }
        
        
            
        
        
        echo $op1->getOp1()."<br />";
        echo $op1->getOp2()."<br />";
        echo $op1->getOperador()."<br />";
        echo $op1->getTipo()."<br />";
        echo "Resultado ".$op1->opera();
        
        
        ?>
    </body>
</html>
