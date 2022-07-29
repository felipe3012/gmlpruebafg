<!DOCTYPE html>
<html>
<head>
 <title>Admin</title>
</head>
<body>

<h1>Se ha enviado un mail de la aplicacion</h1>
<p>Se ha creado un usuario nuevo</p>
<p><strong>Nombre:</strong> {{ $data->nombre }}</p>
<p><strong>Apellido:</strong> {{ $data->apellido }}</p>
<p><strong>Correo:</strong> {{ $data->email }}</p>
<p><strong>Pais:</strong> {{ $data->pais }}</p>

</body>
</html>
