<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Muestra de datos</title>

        <style>
            *
            {
                font-family: Arial Nova;
            }

            table
            {
                width: 350px;
                border-collapse: collapse;
                border-color: rgb(53, 53, 106);
            }

            td
            {
                border: none;
            }

            tr
            {
                height: 25px;
                border: solid 1px;
            }

            h1
            {
                color: rgb(53, 53, 106);
            }

            .left
            {
                width: 40%;
                font-weight: bold;
                font-size: 12px;
            }

            .right
            {
                font-size: 15px;
                color: rgb(53, 53, 106);
            }
        </style>
    </head>
    <body>
        <?php
        $name = $_POST['name'];
        $matricula = $_POST['matricula'];
        $phone = $_POST['phone'];
        $email = $_POST['gmail'];
        $mark = $_POST['mark'];
        $secure = $_POST['secure'];

        if(isset($_POST["button"]))
        {
            if(isset($_POST["morning"]))
                $hour = $_POST["morning"];
                
            if(isset($_POST["afternoon"]))
                $hour = $_POST["afternoon"];
                       
            if(isset($_POST["night"]))
                $hour = $_POST["night"];

            if(isset($_POST["morning"], $_POST["afternoon"]))
                $hour = $_POST["morning"]." | ".$_POST["afternoon"];

            if(isset($_POST["morning"], $_POST["night"]))
                $hour = $_POST["morning"]." | ".$_POST["night"];

            if(isset($_POST["afternoon"], $_POST["night"]))
                $hour = $_POST["afternoon"]." | ".$_POST["night"];

            if(isset($_POST["morning"], $_POST["afternoon"], $_POST["night"]))
                $hour = $_POST["morning"]." | ".$_POST["afternoon"]." | ".$_POST['night'];
        }

        echo"
        <h1>Datos del usuario</h1>
        <table border = '2'>
            <!-- Nombre -->
            <tr>
                <td class='left'>NOMBRE:</td>
                <td class='right'>".$name."</td>
            </tr>
            <!-- Matrícula -->
            <tr>
                <td class='left'>MATRÍCULA:</td>
                <td class='right'>".$matricula."</td>
            </tr>
            <!-- Teléfono -->
            <tr>
                <td class='left'>TELÉFONO:</td>
                <td class='right'>".$phone."</td>
            </tr>
            <!-- Email -->
            <tr>
                <td class='left'>GMAIL:</td>
                <td class='right'>".$email."</td>
            </tr>
            <!-- Marca -->
            <tr>
                <td class='left'>MARCA:</td>
                <td class='right'>".$mark."</td>
            </tr>
            <!-- Seguro -->
            <tr>
                <td class='left'>SEGURO:</td>
                <td class='right'>".$secure."</td>
            </tr>
            <!-- Hora de llamada -->
            <tr>
                <td class='left'>LLAMADA:</td>
                <td class='right'>".$hour."</td>
            </tr>
        </table>"
        ?>
    </body>
</html>