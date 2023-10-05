<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recoge datos</title>

        <style>
            div 
            {
                width: 100px;
                height: 50px;
                background-color: <?php echo $_GET["color"] ?>;
            }
        </style>
    </head>
    <body>
        <p><b>Nombre:</b> <?php echo $_GET["name"] ?></p>
        <hr>
        <p><b>Edad:</b> <?php echo $_GET["age"] ?></p>
        <hr>
        <p><b>Sexo:</b> <?php echo $_GET["sex"] ?></p>
        <hr>
        <p>
            <b>Color:</b> <div></div>
        </p>
        <hr>
        <p><?php echo $_GET["radio"] ?></p>
    </body>
</html>