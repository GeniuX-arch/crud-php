<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>crear usuario</title>
</head>
<!--se llama la consulta de la base de datos la cual trae todos los datos -->
<?php
require './includes/consultar.php'
?>


<body class="bg-gray-900 text-slate-100">
    <div class="flex flex-col justify-center items-center mt-32">
        <h1 class="text-3xl">Ingresar estudiantes</h1>
        <form action="./includes/actualizar.php" method="post" class="w-4/5 ">
            <div class="flex flex-col mt-2">

                <label for="cedula" class="">Cedula</label>
                <?php

                //se obtiene la cedula anteriormente seleccionada y se toma desde el link de la pagina (si se modifica el link, fallarán las demás consultas)

                if (isset($_GET['id'])) {
                    $idUser = $_GET['id'];
                }
                echo "<input type='text' name='cedula' value='" . $idUser . "' pattern='[0-9]{10}' maxlength='10' class='h-10 text-gray-900 bg-gray-300' placeholder='Cedula'" . htmlspecialchars($idUser) . ' readonly>';
                ?>
            </div>
            <div class="flex flex-col mt-2">
                <label for="nombre">Nombre</label>
                <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    //se comparan las cedulas para escribir en el input el dato (el nombre) de la persona
                    if ($idUser === $fila['cedula']) {
                        echo "<input type='text' name='nombre' maxlength='50' class='h-10 text-gray-900' value='" . $fila['nombre'] . "' placeholder='nombre' require>";
                    }
                }
                ?>
            </div>
            <?php
            require './includes/consultar.php'
            ?>
            <div class="flex flex-col mt-2">
                <label for="telefono">Teléfono</label>
                <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    if ($idUser == $fila['cedula']) {
                        //se comparan las cedulas para escribir en el input el dato (el telefono) de la persona
                        echo "<input type='text' name='telefono' pattern='[0-9]{10}' maxlength='10' class='h-10 text-gray-900' value='" . $fila['telefono'] . "' placeholder='Teléfono' require>";
                    }
                }
                ?>
            </div>
            <?php
            require './includes/consultar.php'
            ?>
            <div class="flex flex-col mt-2">
                <label for="correo">Correo</label>
                <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    if ($idUser == $fila['cedula']) {
                        //se comparan las cedulas para escribir en el input el dato (el correo) de la persona
                        echo "<input type='email' name='correo' maxlength='50' class='h-10 text-gray-900' value='" . $fila['correo'] . "' placeholder='Correo' require>";
                    }
                }
                ?>
            </div>
            <div class="flex flex-row justify-center">
                <input type="submit" value="guardar" class="bg-sky-500 p-3.5 hover:bg-sky-700 m-2 rounded-md">
                <a href="./index.php" class="bg-red-600 hover:bg-red-700 p-4 m-2 rounded-md">cancelar</a>
            </div>
        </form>
    </div>

</body>

</html>