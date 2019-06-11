<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Vista listar mascota</h1>
{{"Lista mascota"}}

<p>{{$nombreMascota??""}}</p>
<?php is_null($nombreMascota)?$nombreMascota:'' ?>
    </body>
</html>

