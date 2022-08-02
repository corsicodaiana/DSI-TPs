<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Turno</title>
</head>
<body>
    <form action="">
        <label for="dni">
            <span>ID Donacion:</span>
            <input type="number" id="idDonacion">
            <button type="button">Buscar Donantes</button>
        </label>
        <label for="fechaTurno">
            <span>Fecha Turno:</span>
            <input type="datetime-local" id="fechaTurno">
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
        <br><br>
        <button type="button" id="guardarSocio">Guardar</button>
    </form>
    <div id="tablaSociosDonantes"></div>
</body>
</html>