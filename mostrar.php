<?php 
    //variable por pos
    $nombre = $_POST['nombre'];
    $pass = $_POST['password'];
    //variable por GET
    //  $nombre = $_GET['nombre'];
    //$pass = $_GET['password'];
    echo "Tu contrasena ingresada es: ".$pass .  " Tu nombre es: ".$nombre;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del alumno</title>
</head>
<body>
        <!-- SI QUISIERAS UTILIZARLA PARA ALGUNA ETIQUETA -->
        <h1>Hola <?php echo $nombre?></h1>
        <!--EN EL VALOR MODIFICABLE EN UN INPUT-->
         <input type="text" value="<?php echo $nombre?>">
         <!-- EN UN PLACE HOLDER ALMACENADO sin modificacion -->
          <input type="text" placeholder="<?php echo $nombre?>">
        <!-- si quisieras en una label -->
         <label for=""><?php echo $nombre?></label>

</body>
</html>