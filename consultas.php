<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Consultas</title>
</head>
<body>
        <div class="container">
            <div class="primero">
                <p>
                    MOSTRAR AL CLIENTES SELECCIONADO CON TODOS SUS DEPOSITOS
                </p>
                <form id="task-form">
                    <div class="form-group">
                        <select id="cliente" class="form-control">
                            <option disabled selected>Cliente</option>
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary btn-block text-center">
                        BUSCAR
                    </button>
                </form>

                <div class="col-md-7">
                    <h2>DEPOSITO</h2>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <td>n_cueta</td>
                                <td>monto</td>
                                <td>fecha</td>
                            </tr>
                        </thead>
                        <tbody id="tasks"></tbody>
                    </table>
                </div>
            </div>

            <div class="segundo">
                    <p>
                    MOSTRAR AL CLIENTES SELECCIONADO CON TODOS SUS RETIROS Y PAGOS DE SERCIOS
                    </p>
                    <form id="task-form2">
                        <div class="form-group">
                            <select id="cliente2" class="form-control">
                                <option disabled selected>Cliente</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block text-center">
                             BUSCAR
                        </button>
                    </form>

                    <div class="col-md-7">
                        <h2>RETIRO</h2>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <td>n_cueta</td>
                                    <td>monto</td>
                                    <td>fecha</td>
                                </tr>
                            </thead>
                            <tbody id="tasks1"></tbody>
                        </table>
                    </div>
                    <div class="col-md-7">
                        <h2>PAGO</h2>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <td>n_cueta</td>
                                    <td>monto</td>
                                    <td>fecha</td>
                                </tr>
                            </thead>
                            <tbody id="tasks2"></tbody>
                        </table>
                    </div>
                        
                    <div id="monto">
                    </div>
            </div>
        </div>
        <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
        <script src="consultaS/procesosConsultas.js"></script>
</body>

</html>