<?php
    if (isset($_POST["txtCantidad"])) {
        $cantidad = $_POST["txtCantidad"];

        # crear el formulario
        echo '<h1>Resultado</h1><hr>';
            $suma = 0;
            
            #estructura for
            for ($i=1; $i <= $cantidad; $i++) { 

                

                echo '<br> Nombre : '.$_POST["txtNombre$i"].'<br>'.'   Materia:   '.$_POST["txtMateria$i"].'<br>'.'Nota: '.$_POST["txtNotas$i"].'<br>';
                # cuerpo del formulario

                
                // $suma = $nota +=$a;

                // if (isset($_POST["txtNotas"])) {
                //      $a = $_POST["txtNotas.$a"];
                        // $a = $_POST["txtNotas$a"];
                    // 
                // }
                        echo $_POST["txtNotas$i"];
                // $Promedio = $notas;

            }

           
        // echo "<h2>El promedio de las edades es: $promedio</h2>";
        # volver al inicio
        // echo '<a href="index.php">Calcular nuevamente...</a>';
    } // else {
    //     # volver al inicio
    //     echo '<a href="index.php">Debe enviar la cantidad de estudiantes...</a>';
   // }
    
?>