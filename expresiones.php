<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        $nRa = "/[1-9][0-9]*\/[1-9][0-9]*/"; //numRacional
        $op ="[+|-|*|:]";
        $nRe = "[1-9][0-9]*";//num Real
                
        $racional=<<<FIN
                /[$nRa $op $nRa]|
                 [$nRe $op $nRa]|
                 [$nRa $op $nRe]|
                 [$nRe : $nRe]/
FIN;
       //$numReal ="([1-9][0-9]*)|([1-9][0-9].[0-9]+))";
      $op ="[+|-|*|\/]";
       //$exp = "^$numReal$op$numReal$" ;
       $exp ="^(([0-9]*)|([1-9][0-9].[0-9]+))$";
       
        $num = "10001"   ;
        echo "Vamos a analizar $num <br />";
        //$exp = "#(^[1-9][0-9]*$)#";
        $numReal= '[0-9]+(\.[0-9]*)?';
        $operacion = '[\+|\-|\*|\/]';
        $exp= "/^$numReal$operacion$numReal$/";
        //$exp="/".$_GET['e1xp']."/";
        $num=$_GET['num'];
        if (preg_match($exp , $num))
            echo "<h2>$num es una expresión regular de $exp</h2>";
        else 
            echo "<h2>$num NOOOO  es una expresión regular de $exp</h2>";
        ?>
        <!doctype html>
      <html lang = "en">
      <head>
          <meta charset = "UTF-8">
          <title>Document</title>
      <form action="expresiones.php" method="GET">
         Expresión Regular <input type="text" name="exp" value="^([1-9][0-9]*(\.[0-9]+)?[\+|\-|\*|\/][1-9][0-9]*(\.[0-9]+)?)$"><br />
          Número <input type="text" name="num" id="">
          <sub></sub>
          <input type="submit" value="enviar">
          
      </form>
      </head>
      <body>


      </body>
      </html>