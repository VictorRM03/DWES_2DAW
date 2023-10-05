<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cuadernillo Rubio</title>

        <style>
            form
            {
                position: absolute;
                margin-left: auto;
                justify-content: center;
            }

            .num
            {
                width: 100px;
                height: 30px;
                font-size: 25px;
                text-align: center;
            }

            .result
            {
                width: 100px;
                height: 30px;
                font-size: 25px;
                text-align: center;
            }

            span
            {
                font-size: 20px;
            }

            .boton
            {
                width: 100px;
                height: 30px;
            }
        </style>
    </head>
    <body>
        <?php
        $sum = "+";
        $res = "-";
        $mul = "x";
        $div = "/";
        
        $array = array($sum, $res, $mul, $div);

        echo "
        <form action='recogeSuma.php' method='post'>
            <input class='num' readonly type='number' name='firstNum' id='firstNum' value=".rand(0, 20).">
            <span> ".$array[rand(0,3)]." </span>
            <input class='num' readonly type='number' name='secondNum' id='secondNum' value=".rand(0, 20).">
            <span> = </span>
            <input class='result' type='number' name='result' id='result'>

            <br><br>

            <input class='boton' type='submit' name='button'>
        </form>";
        ?>
    </body>
</html>