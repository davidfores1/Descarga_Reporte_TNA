<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/descargaPDF.css">
    <title>DescargarPDF</title>
</head>

<body>

    <div id="contenedor">
        <div id="cabecera">
            <div id="left"><img id="posicionLe" src="img/centro_internacional_vacunas.png" alt=""></div>
            <div id="center"><img id="cent" src="img/Asoclinic.png" alt=""></div>
            <div id="right"><img id="posicionRi" src="img/sanjose_buga.png" alt=""></div>
        </div>

        <div id="menu">
            <div>
                <hr>
                <strong>CÓDIGO:</strong> T4228100407
                <hr>
            </div>

            <div>
                <div id="izquierda">
                <strong>Nombre:</strong> {{$personas->nombre}}<br>
                <strong>Tipo de muestra:</strong><br>
                <strong>Solicitado por:</strong>
            </div>
                <div id="derecha">
                <strong>Fecha de recepción de la muestra:</strong><br>
                <strong>Fecha de entrega de resultados:</strong><br>
                <strong>Edad a la toma de muestra:</strong>
                </div>
            </div>
        </div>
        <hr>
        <div id="contexto">

            <p>Resultados aminoácidos y acilcarnitinas por espectrometría de masas en tándem</p>
            <p> <strong>Valoración:</strong> No se observa alteración en analitos asociada a un error innato del
                metabolismo.</p>
            <p>El tamizaje para defectos de oxidación de ácidos grasos es más sensible en recién nacidos menores de una
                semana de edad y no es tan confiable en niños mayores.</p>
            <img src="img/firma.png" alt=""><br>
            Myriam Arévalo R PhD <br>Fecha: 23 Febrero 2021 TC: 3399-87

        </div>

        <div id="pie">
            <p>Carrera 37 2 Bis #5E-08 Edificio profesionales Bambú consultorio 201 Cali - Colombia. Tel. 557 49 29 -
                316 550 4183</p>
            www.inmuno.org asoclinic@inmuno.org
        </div>
    </div>

</body>

</html>