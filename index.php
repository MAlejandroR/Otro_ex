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

        <form action="." method="post">
            Operacion
            <input type="text" name="operacion" id="">
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php
        if ($_POST['enviar'] ){
            require 'Operacion.php';
            require 'OperacionRacional.php';
            require 'OperacionReal.php';
            $operacionCadena = $_POST['operacion'];
            //  $op1 = new Operacion("57asfasdfa6");





            echo ("tipo de operacon");

            if (Operacion::tipoOperacion($operacionCadena) == Operacion::RACIONAL) {
                $operacionNum = new OperacionRacional($operacionCadena);
            } else {
                $operacionNum = new OperacionReal($operacionCadena);
            }

            echo "$operacionNum = " . $operacionNum->opera() . "<br />";
            //Mostramos los valores de la opearion
            echo $operacionNum->getOp1() . "<br />";
            echo $operacionNum->getOp2() . "<br />";
            echo $operacionNum->getOperador() . "<br />";
            echo $operacionNum->getTipo() . "<br />";
            echo "Resultado " . $operacionNum->opera();
        }
        ?>
    </body>
</html>
