<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/app.js" defer ></script>
    <script src="js/jquery-3.6.4.slim.js" defer></script>
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-5">
        <section >
            <div class="border border-dark border-3 rounded-4 p-3 shadow-lg p-3 mb-5 bg-body">
                <form id="frmCabeza">
                    <div class="text-center">
                        <h1>FACTURACION</h1>
                    </div>
                    <div class="row ">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="factura" class="form-label">Factura</label>
                                <input type="text"  name="factura" class="form-control" id="factura" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date"  name="fecha" class="form-control" id="fecha" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label" for="cedula">Cedula</label>
                                <input type="text" name="cedula" class="form-control" id="cedula">
                            </div>
                        </div>
                    </div>
                    <button type="button" id="agregarHeader" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
        <section>
            <div class="text-center">
                <h1>Detalle Producto</h1>
            </div>
                <div class="border border-dark border-3 rounded-4 ">
                    <div class="mb-4" id="detalles">
                        
                    </div>
                <div>
        </section>
        <div class="d-grid gap-2 mt-2">
            <button class="btn btn-primary" id="agregar" type="button">+</button>
        </div>
        <div class="mt-5">
            <button type="button" id="facturar" onclick="submitForm()"class="btn btn-primary">Generar Factura</button>
        </div>
        
    </div>
    <div id="result"></div>
</body>
</html>