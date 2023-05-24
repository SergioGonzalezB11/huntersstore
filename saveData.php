<?php
  // Obtén los datos enviados desde el formulario
    $data = json_decode(file_get_contents('php://input'), true);

  // Accede a los encabezados de factura y realiza las operaciones necesarias
    $headers = $data['headers'];
    foreach ($headers as $header) {
    $factura = $header['factura'];
    $fecha = $header['fecha'];
    $nombre = $header['nombre'];
    $cedula = $header['cedula'];
    
    // Realiza las operaciones con los datos del encabezado de factura
    // (por ejemplo, guardar en la base de datos)
}

  // Accede a los detalles de factura y realiza las operaciones necesarias
    $details = $data['details'];
    foreach ($details as $detail) {
    $producto = $detail['producto'];
    $quantity = $valor['valor'];
    
    // Realiza las operaciones con los datos del detalle de factura
    // (por ejemplo, guardar en la base de datos)
}

  // Envía una respuesta de éxito
echo json_encode($data);
?>