<html>
    <head>
        <title> Aula 05  PHP </title>
    </head>
    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];

            echo "<br><br> Os valores informados são $n1 e $n2 <br>";
            echo "<br><br> O valor absoluto de $n1 é",abs($n2);
            echo "<br><br>o resultado de $n2  <sup>$n1</sup> é igual a" .pow($n2,$n1);
            echo "<br><br> A raiz quadrada de $n2 é" .sqrt($n2);
           
            echo"<br><br> Arredonda o Número de $n2 e igual a " .round($n2);
            echo"<br><br> O número $n2 arredondado pra cima é igual a " .ceil($n2);
            echo"<br><br> O número  $n2 arredondado para baixo e igual a " .floor($n2);

            echo"A parte inteira de $n2 é igual a" .intval($n2);

            echo"<br> Um pirulito custa R$" .number_format($n1, 2);

        ?>
    </body>
</html>
