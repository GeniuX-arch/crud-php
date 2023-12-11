<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>crear usuario</title>
</head>

<body class="bg-gray-900 text-slate-100">
    <div class="flex flex-col justify-center items-center mt-32">
        <h1 class="text-3xl">Ingresar estudiantes</h1>
        <form action="./includes/crear.php" method="post" class="w-4/5 ">
            <div class="flex flex-col mt-2">
                <label for="cedula" class="">Cedula</label>
                <!--el pattern lo encontré en internet (buscaba que no se pasaran las personas de lineas y que aceptara numeros)-->
                <input type="text" name="cedula" pattern="[0-9]{10}" maxlength="10" class="h-10 text-gray-900" placeholder="Cedula" require>
            </div>
            <div class="flex flex-col mt-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" maxlength="50" class="h-10 text-gray-900" placeholder="Nombre" require>
            </div>
            <divnumber class="flex flex-col mt-2">
                <input type="text" name="telefono" pattern="[0-9]{10}" maxlength="10" class="h-10 text-gray-900" placeholder="Teléfono" require>
            </divnumber>
            <div class="flex flex-col mt-2">
                <label for="correo">Correo</label>
                <input type="email" name="correo" maxlength="50" class="h-10 text-gray-900" placeholder="Correo" require>
            </div>
            <div class="flex flex-row justify-center">
                <input type="submit" value="guardar" class="bg-sky-500 p-3.5 hover:bg-sky-700 m-2 rounded-md">
                <a href="./index.php" class="bg-red-600 hover:bg-red-700 p-4 m-2 rounded-md">cancelar</a>
            </div>
        </form>
    </div>

</body>

</html>