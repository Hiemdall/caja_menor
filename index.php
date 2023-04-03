<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja Menor Integratic</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
 <h1>Caja Menor Integratic</h1> 
<form action="procesar_transaccion.php" method="POST">

  <label for="fecha_inicio" class=titulo5 >Fecha Inico:</label>
  <input type="date" id="fecha_inicio" name="fecha_inicio" class=cuadro5 required>


  
  <label for="proveedor">Proveedor:</label>
  <select name="proveedor" id="proveedor">
  </select>

  <label for="nit">Nit:</label>
  <input type="text" name="nit" id="nit">


  <label for="soporte">Soporte:</label>
  <input type="text" name="soporte" id="soporte">

  <label for="descripcion">Descripción:</label>
  <input type="text" name="descripcion" id="descripcion" required>

  <label for="categoria_gastos">Categoria de Gastos:</label>
  <select name="categoria_gastos" id="categoria_gastos">
  </select>

  <label for="tipo_transaccion">Tipo de transacción:</label>
  <select name="tipo_transaccion" id="tipo_transaccion">
  </select>

  <label for="monto">Monto:</label>
  <input type="text" name="monto" id="monto" required>

  <label for="observacion">Observación:</label>
  <input type="text" name="observacion" id="observacion" required>


  <input type="submit" value="Registrar">

  <table id="tabla_registros">
  <thead>
    <tr>
      <th>Fecha Inicio</th>
      <th>Proveedor</th>
      <th>NIT</th>
      <th>Soporte</th>
      <th>Descripción</th>
      <th>Categoría de Gastos</th>
      <th>Tipo de Transacción</th>
      <th>Monto</th>
      <th>Observación</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</form>
</body>
</html>