<!DOCTYPE html>
<html>
<head>
 <title>Client</title>
</head>
<body>

 <h1>Se ha enviado un mail de la aplicacion</h1>
 <p>Su usuario ha sido creado</p>

<p><strong>Nombre:</strong> {{ $data->nombre }}</p>
<p><strong>Apellido:</strong> {{ $data->apellido }}</p>
<p><strong>Correo:</strong> {{ $data->email }}</p>

</body>
</html>
