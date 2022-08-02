<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Socio</title>
</head>
<body>
    <form action="">
        <label for="dni">
            <span>DNI:</span>
            <input type="text" id="dni" placeholder="Tu DNI">
        </label>
        <label for="nombre">
            <span>Nombre:</span>
            <input type="text" id="nombre" placeholder="Nombre">
        </label>
        <label for="Apellido">
            <span>Apellido:</span>
            <input type="text" id="apellido" placeholder="Apellido">
        </label>
        <label for="fechaNacimiento">
            <span>Fecha Nacimiento:</span>
            <input type="date" id="fechaNacimiento">
        </label>
        <br><br>
        <label for="domicilio">
            <span>Domicilio:</span>
            <input type="text" id="domicilio" placeholder="Domicilio">
        </label>
        <label for="localidad">
            <span>Localidad:</span>
            <input type="text" id="localidad" placeholder="Localidad">
        </label>
        <label for="telefono">
            <span>Telefono:</span>
            <input type="text" id="telefono" placeholder="Telefono">
        </label>
        <label for="email">
            <span>Email:</span>
            <input type="email" id="email" placeholder="Email">
        </label>
        <br><br>
        <label for="grupo">
            <span>Grupo:</span>
            <select name="grupo" id="grupo">
                <option value="-1" disabled selected>Seleccione una opcion..</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="0">0</option>
            </select>
        </label>
        <label for="factor">
            <span>Factor:</span>
            <select name="factor" id="factor">
                <option value="-1" disabled selected>Seleccione una opcion..</option>
                <option value="+">+</option>
                <option value="-">-</option>
            </select>
        </label>
        <label for="enfermedad">
            <span>Enfermedad cronica:</span>
            <input type="radio" id="conEnfermedad" name="enfermedad" value="conEnfermedad">
            <label for="si">Si</label>
            <input type="radio" id="sinEnfermedad" name="enfermedad" value="sinEnfermedad" checked>
            <label for="no">No</label>
        </label>
        <br><br>
        <label for="Medicacion">
            <span>Medicacion cronica:</span>
            <input type="radio" id="conMedicacion" name="medicacion" value="conMedicacion">
            <label for="si">Si</label>
            <input type="radio" id="sinMedicacion" name="medicacion" value="sinMedicacion" checked>
            <label for="no">No</label>
        </label>&ensp;
        <label for="tipoSocio">
            <span>Tipo socio:</span>
            <input type="text" id="tipoSocio" disabled>
        </label>
        <br><br>
        <label for="descripcionMedicacion">
            <textarea id="w3review" name="w3review" rows="4" cols="50" id="descripcionMedicacion" disabled>
            Descripcion medicacion
            </textarea>
        </label>
        <br><br>
        <button type="button" id="guardarSocio">Guardar</button>
    </form>
</body>
</html>