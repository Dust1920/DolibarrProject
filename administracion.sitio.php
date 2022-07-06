<?php
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="administracion_style.css">
    <link rel="stylesheet" type="text/css" href="css-lista.css">
</head>
<br>
<h1 class="header">Configuración de datos</h1>
<div id="sql-input-section">
    <b id="sql-input-text">Fuente de datos para estadísticas</b>
    <input type="text" class="first-child"  id="sql-input-field" placeholder="SQL Fuente">
    <button type="button" id="sql-input-button">Actualizar</button>
</div>
<!-- Aqui comienza tabla-->
<div>
    <button class="button1" type="button" onClick="window.location.reload();">Refrescar</button>
    <br>
    <table class="tabla1">
    <th  class="tituloTabla" colspan="3"><h1 id="table-container-title">Gráficas</h1></th>

    <tr class="subtitulo">
    <td>Nombre</td>
    <td>Tipo</td>
    <td>Fecha</td>
    </tr>
    <tr class="subtitulo2">
        <td>111111111111111111111111111111</td>
        <td>2</td>
        <td>3</td>
    </tr>
</table>
</div>
<!-- Aqui termina tabla-->
</html>
