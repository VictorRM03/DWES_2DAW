<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado Cuadernillo Rubio</title>

        <style>
            span
            {
                font-size: 20px;
            }

            .ca
            {
                color: green;
            }

            .ia
            {
                color: red;
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
        $num1 = $_POST['firstNum'];
        $num2 = $_POST['secondNum'];
        $result = $_POST['result'];

        if($num1 + $num2 == $result){
            echo "<span>$num1 + $num2 = </span><span class='ca'>$result</span><br><br>";
            echo "<h2>La respuesta es correcta</h2>";
        } else {
            echo "<span>$num1 + $num2 = </span><span class='ia'>$result</span><br><br>";
            echo "<h2>La respuesta es incorrecta</h2>";
        }
        ?>

        <form action="inicio.php">
            <input class="boton" type="button" onclick="location.href='index.php';" value="Volver" />
        </form>
    </body>
</html>