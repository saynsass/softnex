<?php

include("conexion.php")

if(isset($_POST['registrar'])){

    if(
        strlen($_POST['Numero']) >= 1 &&
        strlen($_POST['Confirma']) >= 1 &&
        strlen($_POST['Noira']) >= 1 &&   
        ) {
            $Numero = trim($_POST['Numero']);
            $Confirma = trim($_POST['Confirma']);
            $Noira = trim($_POST['Noira']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(Numero, Confirma, Noira)
                         VALUE ('$Numero', '$Confirma', '$Noira')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="sucess">Gracias por responder</h3>
                <?php
            }  else {
                ?>
                <h3 class="error">Occurrio un error</h3>
                <?php

            }  else {
                ?>
                <h3 class="error">llena todos los campos</h3>
                <?php
            }            

    }


}

?>