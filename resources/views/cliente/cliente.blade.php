<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <link rel="stylesheet" href="css/cliente.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <title>Descarga resultados TNS</title>
</head>

<body>

    <div class="container">

        <div class="col d-flex justify-content-center">
            <img src="img/asoclinic1.png" alt="">
        </div>

        <div class="col d-flex justify-content-center">
            <h2>Descarga resultados TNS</h2>
        </div>

        <div class="col d-flex justify-content-center" style="padding-left: 60px;">
            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Identificación">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nombre">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                        <a href="{{ url('/') }}" class="btn btn-primary mb-2">Admin</a>
                    </div>
                </div>
            </form>
        </div>

        <table class="table">
            <thead class="table-active">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DOCUMENTO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>

                        <a href="" class="btn btn-success">Imprimir</a><br><br>

                    </td>
                </tr>

            </tbody>
        </table>

</body>

</html>