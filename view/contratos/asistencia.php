<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
</head>

<body>
  <div class="sidebar">
    <h2 style="text-align: center;">Menú</h2>

    <a href="../index.php">Inicio</a>
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        CONTRATOS
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body p-0">
        <ul class="list-unstyled mb-0">
          <li><a href="contratos.html" class="d-block px-3 py-2 text-decoration-none text-dark">Contratos</a>
          <li><a href="asistencia.php" class="d-block px-3 py-2 text-decoration-none text-dark">Asistencia</a>
          </li>
        </ul>
      </div>
    </div>

    <a href="cerrar_sesion.php">Cerrar Sesión</a>
  </div>

  <div class="content">
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <th scope="col">#</th>
          <th scope="col">DNI</th>
          <th scope="col">Nombres y Apellidos</th>
          <th scope="col">Area</th>
          <th scope="col">Cargo</th>
          <th scope="col">Entrada</th>
          <th scope="col">Inicio Refrigerio</th>
          <th scope="col">Fin Refrigerio</th>
          <th scope="col">Salida</th>
          <th scope="col">OPCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr align="center">
          <th scope="row">1</th>
          <td>75626327</td>
          <td>Gian Franco Anton Felix</td>
          <td>Sistema</td>
          <td>Ing</td>
          <td>08:00</td>
          <td>13:00</td>
          <td>14:30</td>
          <td>18:06</td>
          <td><button><i class="fa-solid fa-file-invoice"></i></button></td>
        </tr>
        <tr align="center">
          <th scope="row">2</th>
          <td>78955213</td>
          <td>Kelvin Pipa Castilla</td>
          <td>Marketing</td>
          <td>supervisor</td>
          <td >07:55</td>
          <td>12:50</td>
          <td>14:20</td>
          <td>18:01</td>
          <td><button><i class="fa-solid fa-file-invoice"></i></button></td>

        </tr>
        <tr align="center">
          <th scope="row">3</th>
          <td>84512369</td>
          <td>Erick Perez</td>
          <td>Contabilidad</td>
          <td>Contador </td>
          <td>08:05</td>
          <td>13:00</td>
          <td>14:20</td>
          <td>18:12</td>
          <td><button><i class="fa-solid fa-file-invoice"></i></button></td>

        </tr>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>
