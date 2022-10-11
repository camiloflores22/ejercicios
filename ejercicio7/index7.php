<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INGRESE SUS DATOS</h1>
    <form action="procesador.php" method="GET">
        <label for="">Nombre:</label><br>
        <input type="text" name="nombre"><br><br>


        <label for="">Apellido:</label><br>
        <input type="text" name="apellido"><br><br>

        <label for="">RUT:</label><br>
        <input type="text" name="rut"><br><br>

        <label for="">Correo Electronico:</label><br>
        <input type="text" name="correo_electronico"><br><br>



        <input type="submit" value="Calcule" name="submit">


          <select name="carreras">
            <option value="tns_geologia">TNS Geologia</option>
            <option value="tns_minas">TNS Minas</option>
            <option value="tns_metales">TNS Metales</option>
            <option value="tns_informatica">TNS Informatica</option>
          </select>

    </form>
</body>
</html>