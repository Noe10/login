<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
    <title>Retiro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mantenimiento</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="categoria.html">REGRESAR <span class="sr-only">(current)</span></a>
            </li>
           </ul>   
            <form class="form-inline my-2 my-lg-0">
              <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
      </nav>
      <h3 style="text-align: left; margin-left:10% ; margin-top: 3%;">Retiro</h3>
      <div class="container">
          
        <div class="row p-4">
          <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                  
                <!-- FORM TO ADD Categoria-->
                <form id="task-form" >
                  <div class="form-group">
                    <input type="text" id="fecha" placeholder="Fecha Retiro" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="monto" cols="30" rows="10" class="form-control" placeholder="Monto Retiro"></input>
                  </div>
                  <div class="form-group">
                     <select id="cliente"   class="form-control">
                                <option disabled selected>Cliente</option>
                      </select>
                      
                  </div>
                  
                
                  <input type="hidden" id="taskId">
                  <button type="submit" class="btn btn-primary btn-block text-center">
                    Guardar
                  </button>
                </form>
              </div>
            </div>
          </div>
  
          <!-- TABLE  -->
          <div class="col-md-7">
            <div class="card my-4" id="task-result">
              <div class="card-body">
                <!-- SEARCH -->
                <ul id="container"></ul>
              </div>
            </div>
  
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <td>Id</td>
                  <td>Fecha</td>
                  <td>Monto</td>
                  <td>Cliente</td>
                </tr>
              </thead>
              <tbody id="tasks"></tbody>
            </table>
          </div>
        </div>
      </div>
  
      <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
      <!-- Frontend Logic -->
      <script src="retiro/procesosRetiro.js"></script>
</body>
</html>