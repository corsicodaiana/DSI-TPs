<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Donacion</title>
</head>
<body>
    <form action="">
        <label for="dni">
            <span>ID Socio Beneficiario:</span>
            <input type="number" id="idBeneficiario">
        </label>
        <label for="fechaDonacion">
            <span>Fecha Donacion:</span>
            <input type="date" id="fechaDonacion">
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
        <label for="cantidadDonantes">
            <span>Cantidad Donantes:</span>
            <input type="number" id="cantidadDonantes">
        </label>
        <br><br>
        <button type="button" id="guardarSocio">Guardar</button>
    </form>
</body>
</html>