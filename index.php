<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Bienvenido</title>
  </head>

  <body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> Bienvenido </a>
      </div>
    </nav>

    <div class="imagen-contenedor">
      <div class="contenedor-maestro">
        <div class="contenedor-d">
          <div class="d-flex flex-column titulo">
            Bienvenido a nuestra p&aacute;gina en PHP
            <div class="text">
              Favor, para continuar seleccione el boton acontinuaci&oacute;n
              <br />
              Esta p&aacute;gina ha sido construida con Bootstrap 5 y estilos
              propios, <br />
              siendo ejecutado en Xampp
            </div>
          </div>
        </div>
        <div class="intermedio"></div>
        <div class="contenedor-i">
          <button
            type="button"
            class="btn btn-light"
            data-bs-toggle="modal"
            data-bs-target="#Modal"
          >
            Acceder a Opciones
          </button>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="Modal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      style="background-color: rgba(0, 0, 0, 0.3)"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark" style="color: #fff">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Favor, escoja uno.
            </h1>
            <div
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="modal"
              aria-label="Close"
              style="border: none"
            ></div>
          </div>
          <div class="modal-body">
            <div class="padre">
              <div class="hijos">
                <div class="hijo" id="one">
                  <div class="contenedor-hijo" id="contenido">
                    Ir a suma de dos numeros
                  </div>
                </div>
                <div class="hijo" id="two">
                  <div class="contenedor-hijo" id="contenido">
                    Ir a n&uacute;meros del 1 al 10 de forma lineal
                  </div>
                </div>
                <div class="hijo" id="three">
                  <div class="contenedor-hijo" id="contenido">
                    Ir a mayor o menor de 3 variables
                  </div>
                </div>
                <div class="hijo" id="four">
                  <div class="contenedor-hijo" id="contenido">
                    Ir a c&aacute;lculo de salario final
                  </div>
                </div>
                <div class="hijo" id="five">
                  <div class="contenedor-hijo" id="contenido">
                    Ir a palabras palindromas
                  </div>
                </div>
                <div class="hijo" id="six">
                  <div class="contenedor-hijo" id="contenido">
                    Ir a arreglo de persona
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              data-bs-dismiss="modal"
            >
              Salir
            </button>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/script.js"></script>
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
