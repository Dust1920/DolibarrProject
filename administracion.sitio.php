<?php
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="administracion_style.css">
</head>
<br>
<h1 class="header">Configuración de datos</h1>
<div id="sql-input-section">
    <p id="sql-input-text">Fuente de datos para estadísticas</p>
    <input type="text" class="flat minwidth400  --success" id="sql-input-field" placeholder="SQL Fuente">
    <input type="submit" name="save" class="button button-save" id="sql-input-button" value="Actualizar"></button>
</div>

<br>
<h1 class="header">Modificación/Eliminación de datos</h1>
<div class="twin-columns1">
    <div class="table-section">
        <input type="submit" name="save" class="button button-save" id="refresh-table-button" value="Actualizar Tabla"></button>
        <!-- Aqui comienza tabla-->
        <table class="noborder tabla-grafica" id="tabladatos">
            <th class="table-primay" colspan="3">
                <h1 id="table-container-title">Gráficas Existentes</h1>
            </th>
            <tr class="liste_titre">
                <td>Nombre</td>
                <td>Tipo</td>
                <td>Fecha</td>
            </tr>
            <tr class="pair">
                <td>Nombre de grafica</td>
                <td>Pasteles</td>
                <td>03/02/2022</td>
            </tr>
        </table>
        <!-- Aqui termina tabla-->
    </div>
    <div class="modify-section">
        <div class="twin-columns2">
        <p class="column1">Gráfica a modificar:</p>
            <select class="column2" id="combo-graphic-type">
                <option value="barras">Grafica 1</option>
                <option value="pastel">Grafica 2</option>
            </select>
            <p class="column1">Tipo de gráfica:</p>
            <select class="column2" id="combo-graphic-type">
                <option value="barras">Barras</option>
                <option value="pastel">Pastel</option>
            </select>
            <p class="column1">Nombre de la gráfica:</p>
            <input type="text" class="flat column2 --success" id="graphic-name-input-field">
            <p class="column1">Datos de eje Y:</p>
            <input type="text" class="flat column2 --success" id="y-axis-data-input-field">
            <p class="column1">Datos de eje X:</p>
            <input type="text" class="flat column2 --success" id="x-axis-data-input-field">
            <input type="submit" name="save" class="button button-save delete-button column1" id="sql-input-button" value="ELIMINAR"></button>
            <input type="submit" name="save" class="button button-save add-button column2" id="sql-input-button" value="AÑADIR"></button>
        </div>

    </div>
</div>

</html>