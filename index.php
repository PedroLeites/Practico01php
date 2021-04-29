<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Práctico 1</title>
</head>
<body>
  <h1>Práctico 1</h1>
  <?php
require_once "Cuenta.php";
require_once "Persona.php";

echo "Ejercicio 1 - Clase Cuenta ";
$cuenta1 = new Cuenta("Juan", 50);
echo $cuenta1;
$cuenta2 = new Cuenta("Diego", 0);
echo $cuenta2;
?>
<br />
  <?php
echo "Ejercicio 2 - Clase Persona";
$persona1 = new Persona("Juan", 50, "", 'H', 59.5, 1.65);
echo $persona1;
$persona2 = new Persona("Juan", 50, "", 'H', 66, 1.85);
echo $persona2;
?>
</body>
</html>
