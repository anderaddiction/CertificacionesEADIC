<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Email enviado a Osticket</h1>
    <h3>Datos que se envian a Osticket</h3>
    Nombre : {{ $request->name }} {{ $request->last_name }}<br>
    Email : {{ $request->email }}<br>
    Telefono : {{ $request->phone_code.''.$request->telefono }}<br>
    Motivo de Llamada : {{ $request->motivo_llamada }}<br>
    horario : {{ $request->horario }}
    País: {{ $request->country }}
</body>
</html>
