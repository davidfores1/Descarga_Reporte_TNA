<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar</title>
</head>

<body>
    <center>
        <a class="brand-link">
            <img src="{{$personas->documento}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span style="color: white" class="brand-text font-weight-light">Asoclinic</span>
        </a>
    </center>

    <table class="table">
        <thead class="table-active">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DOCUMENTO</th>
                <th scope="col">NOMBRE</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <th>{{$personas->id}}</th>
                <td>{{$personas->documento}}</td>
                <td>{{$personas->nombre}}</td>

            </tr>

        </tbody>
    </table>
</body>

</html>