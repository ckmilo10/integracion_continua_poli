<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/estilos.css">

    <title class="text-center">CRUD</title>


</head>

<body>

    </div>
    <br />
    <br />
    <div>
        <table id="datos_usuario" class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Imagen</th>
                    <th>Fecha crear</th>
                    <th>Editar</th>
                    <th>ID</th>
                </tr>
            </thead>
        </table>

        <button type="button" class="btn btn-primary w-50" data-toggle="modal"
            data-target="formulario" id="botonCrear">
            <i class="bi bi-plus-circle"></i>CREAR
        </button>

        <div class="modal-body">
            <form method="POST" id="formulario" enctype="multipart/form/data">
                <div class="modal-content">
                    <label for="nombre">Ingrese su nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <br>
                    </br>

                    <label for="apellido">Ingrese su apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control">
                    <br>
                    </br>

                    <label for="celular">Ingrese su celular</label>
                    <input type="number" name="celular" id="celular" class="form-control">
                    <br>
                    </br>
                    <label for="correo">Ingrese su correo</label>
                    <input type="email" name="correo" id="correo" class="form-control">
                    <br>
                    </br>
                    <label for="imagen">seleccione una imagen </label>
                    <input type="file" name="imagen" id="imagen" class="form-control">
                    <span id="imagen-subida"></span>
                    <br>
                    </br>

                </div>
            </form>

            <div class="modal-footer">
                <input type="hidden" name="id_usuario" id="id_usuario">
                <input type="hidden" name="operacion" id="operacion">

                <input type="submit" name="action" id="action" class="btn btn-success" value="crear">
            </div>
        </div>
    </div>
    </div>
    </DIV>

    <div>
        <!-- Button trigger modal -->
        <button type="button" class="modalusuario" data-toggle="modal" data-target="modalusuario">
            Crear
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalusuario">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="formulario" enctype="multipart/form/data">
                            <div class="modal-content">
                                <label for="nombre">Ingrese su nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                                <br>
                                </br>

                                <label for="apellido">Ingrese su apellido</label>
                                <input type="text" name="apellido" id="apellido" class="form-control">
                                <br>
                                </br>

                                <label for="celular">Ingrese su celular</label>
                                <input type="int" name="celular" id="celular" class="form-control">
                                <br>
                                </br>
                                <label for="correo">Ingrese su correo</label>
                                <input type="email" name="correo" id="correo" class="form-control">
                                <br>
                                </br>
                                <label for="imagen">seleccione una imagen </label>
                                <input type="file" name="imagen" id="imagen" class="form-control">
                                <span id="imagen-subida"></span>
                                <br>
                                </br>

                            </div>
                        </form>

                        <div class="modal-footer">
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <input type="hidden" name="operacion" id="operacion">

                            <input type="submit" name="action" id="action" class="btn btn-success" value="crear">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-body">
            <form method="POST" id="formulario" enctype="multipart/form/data">
                <div class="modal-content">
                    <label for="nombre">Ingrese su nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <br>
                    </br>

                    <label for="apellido">Ingrese su apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control">
                    <br>
                    </br>

                    <label for="celular">Ingrese su celular</label>
                    <input type="number" name="celular" id="celular" class="form-control">
                    <br>
                    </br>
                    <label for="correo">Ingrese su correo</label>
                    <input type="email" name="correo" id="correo" class="form-control">
                    <br>
                    </br>
                    <label for="imagen">seleccione una imagen </label>
                    <input type="file" name="imagen" id="imagen" class="form-control">
                    <span id="imagen-subida"></span>
                    <br>
                    </br>

                </div>
            </form>

            <div class="modal-footer">
                <input type="hidden" name="id_usuario" id="id_usuario">
                <input type="hidden" name="operacion" id="operacion">

                <input type="submit" name="action" id="action" class="btn btn-success" value="crear">
            </div>
        </div>
    </div>
    </div>



    <h1>Hola mundo</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
</body>

</html>