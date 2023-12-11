<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <title>Parcial</title>
</head>
<!--llamo a la consulta de los datos -->
<?php
require './includes/consultar.php'
?>

<body class="bg-gray-900 text-slate-100 ">
  <div>
    <div class="flex flex-col  justify-center items-center mt-16 ">
      <h1 class="text-2xl">Estudiantes de ejemplo</h1>
      <div class="flex flex-row-reverse justify-between mt-16 w-4/5">
        <h1 class="text-xl"></h1>
        <a href="./crear-usuario.php" class="bg-sky-500 p-3 hover:bg-sky-700 rounded-md">crear usuario</a>
      </div>
      <div>
        <table>
          <tr class="border-b-2 border-gray-700">
            <!--se crean los encabezados-->
            <th class="w-80 h-20 text-left">Cedula</th>
            <th class="w-80 h-20 text-left">Nombre</th>
            <th class="w-80 h-20 text-left">Telefono</th>
            <th class="w-80 h-20 text-left">Correo</th>
          </tr>
          <?php
          //se muestran todos los datos de la consulta
          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr class='h-16 border-b border-gray-800'><td>" . $fila['cedula'] . "</td>
            <td>" . $fila['nombre'] . "</td><td>" . $fila['telefono'] . "</td><td>" . $fila['correo'] . "</td>
            <td>" . "<td><a href='./editar-usuario.php?id=" . $fila['cedula'] . "'class='bg-green-500 p-3 rounded-md hover:bg-green-700 mr-2'>Actualizar</a></td>" .
              "<td><a href='./includes/eliminar.php?id=" . $fila['cedula'] . "' class='bg-red-500 p-3 rounded-md hover:bg-red-700'>Eliminar</a></td>" .
              "</tr>";
          }

          mysqli_close($conexion);
          ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>