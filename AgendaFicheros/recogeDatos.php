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
                margin: auto;
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
                text-align: center;
            }

            .top
            {
                width: 40%;
                font-weight: bold;
                font-size: 12px;
            }

            .button
            {
                font-size: 15px;
                color: rgb(53, 53, 106);
            }
        </style>
    </head>
    <body>
        <?php
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];

        $myFile = fopen("agenda.csv","a+") or die ("Archivo no creado");

        fwrite($myFile, $name.",". $lastName.",".$phone."\n");
        
        fclose($myFile);

        $myFile2 = fopen("agenda.csv", "r") or die ("No se lee");

        
            echo"
            <h1>Datos del usuario</h1>
            <table border = '2'>
                <!-- Cabecera -->
                <tr>
                    <td class='top'>NOMBRE:</td>
                    <td class='top'>APELLIDO:</td>
                    <td class='top'>TELÉFONO:</td>
                    
                </tr>";
                while(($datos = fgetcsv($myFile2, ",")) == true)
                {
                    $num = count($datos);
                    echo "<tr>";
                        for ($col = 0; $col < $num; $col++){
                            echo "<td class='button'>".$datos[$col]."</td>";
                        }
                    echo "</tr>";
                }
            echo "</table>";
        fclose($myFile2);
        ?>
    </body>
</html>