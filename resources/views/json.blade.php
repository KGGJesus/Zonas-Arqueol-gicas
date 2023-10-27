<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titulo
        {
            text-align: center
    }
 </style>
</head>
<body>
<h1 class = "titulo">Datos de Zonas Arqueologicas JSON</h1>
    @if (isset($datosJson))
        <pre>{{ json_encode($datosJson, JSON_PRETTY_PRINT) }}</pre>
    @else
        <p>No se han encontrado datos JSON.</p>
@endif
</body>
</html>
