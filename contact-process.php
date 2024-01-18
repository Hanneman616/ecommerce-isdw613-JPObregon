<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        echo "Nombre: " . $_POST['name'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "Mensaje: " . $_POST['message'] . "<br>";
    }else{
        echo "Todos los campos son requeridoss";
    }


?>



    
</body>
</html>