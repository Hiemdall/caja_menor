<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja Menor Integratic</title>
</head>
<body>
<form action="procesar_transaccion.php" method="POST">
  
  <label for="proveedor">Proveedor:</label>
  <select name="proveedor" id="proveedor">
    
  </select>

  <label for="num_factura">Número de factura:</label>
  <input type="text" name="num_factura" id="num_factura">

  <label for="descripcion">Descripción:</label>
  <input type="text" name="descripcion" id="descripcion" required>

  <label for="monto">Monto:</label>
  <input type="text" name="monto" id="monto" required>


  <input type="submit" value="Registrar transacción">
</form>
</body>
</html>