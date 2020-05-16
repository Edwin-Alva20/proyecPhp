<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras repetitivas</title>
</head>
<body>
    <h1>Alumnos</h1>
    <hr>
    <form action="index.php" method="post">
        <label for="txtCantidad">Cantidad de estudiantes</label>
        <input type="number" name="txtCantidad" id="txtCantidad" required>
        <label for="txtCnotas">Cantidad de notas</label>
        <input type="number" name="txtCnotas" id="txtCnotas" required>
        <input type="submit" value="Enviar">
        
    </form>

    <?php
    if (isset($_POST["txtCantidad"])) {
        $cantidad = $_POST["txtCantidad"];
        $cN = $_POST["txtCnotas"];

        # crear el formulario
        echo '
        <h1>Determinar el promedio de las edades de un grupo de estudiantes.</h1>
        <hr>
        <form action="promedio.php" method="post">';
            $cuerpoForm = "";

            #estructura for
            for ($i=1; $i <= $cantidad; $i++) { 
                # cuerpo del formulario
                $cuerpoForm = $cuerpoForm.'<label for="txtNombre'.$i.'">Nombre del alumno'.$i.'</label>
                <input type="text" name="txtNombre'.$i.'" id="txtNombre'.$i.'" required><hr>';
                $cuerpoForm = $cuerpoForm.'<label for="txtMateria'.$i.'">Materia'.$i.'</label>
                <input type="text" name="txtMateria'.$i.'" id="txtMateria'.$i.'" required><hr>';

                for ($a=1; $a <=$cN ; $a++) { 
                    $cuerpoForm = $cuerpoForm.'<label for="txtNotas'.$a.$i.'">nota '.$a.$i.'</label>
                    <input type="number" name="txtNotas'.$a.$i.'" id="txtNotas'.$a.$i.'" required><hr>';
    
                }
            }
        echo $cuerpoForm.'<input type="hidden" name="txtCantidad" value="'.$cantidad.'"><input type="submit" value="Calcular"></form>';
    } else {
        # volver al inicio
        echo '<a href="index.php">Debe enviar la cantidad de estudiantes...</a>';
    }
    
?>
    
</body>
</html>