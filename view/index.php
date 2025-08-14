<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
</head>
<style>
    body {
      margin: 0;
      display: flex;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      width: 200px;
      background-color: #ff5f00;
      height: 100vh;
      color: white;
      padding-top: 20px;
      position: fixed;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .content {
      margin-left: 200px; /* espacio para el sidebar */
      padding: 20px;
      flex-grow: 1;
    }
  </style>
  <body>

   <div class="sidebar">
    <h2 style="text-align: center;">Menú</h2>
    
    <a href="index.php">Inicio</a>
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        PERSONAS
      </button>
    </h2>
<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
  <div class="accordion-body p-0">
    <ul class="list-unstyled mb-0">
      <li><a href="Personas/contratos.html" class="d-block px-3 py-2 text-decoration-none text-dark">Contratos</a></li>
      <li><a href="Personas/asistencia.php" class="d-block px-3 py-2 text-decoration-none text-dark">Asistencia</a></li>
    </ul>
  </div>
</div>

        <a href="cerrar_sesion.php">Cerrar Sesión</a>

  </div>
  </div>
  <div class="content">
    <h1>Bienvenido</h1>
    <p>Este es el contenido principal de la página.</p>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>