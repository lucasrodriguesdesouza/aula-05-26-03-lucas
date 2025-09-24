<html>
    <head>
        <title> Aula 05  PHP </title>
    </head>
    <body>
        <?php
            $n1= 2;
            $n2= $_GET["x"];

            echo "Os valores informados são $n1 e $n2 <br>";
            echo "O valor absoluto de $n1 é",abs($n2);
            echo "<br> o resultado de $n2  <sup>$n1</sup> é igual a" .pow($n2,$n1);
        ?>
    </body>
</html>
