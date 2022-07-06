<?php
// Load Dolibarr environment
$res = 0;
// Try main.inc.php into web root known defined into CONTEXT_DOCUMENT_ROOT (not always defined)
if (!$res && !empty($_SERVER["CONTEXT_DOCUMENT_ROOT"])) {
	$res = @include $_SERVER["CONTEXT_DOCUMENT_ROOT"]."/main.inc.php";
}
// Try main.inc.php into web root detected using web root calculated from SCRIPT_FILENAME
$tmp = empty($_SERVER['SCRIPT_FILENAME']) ? '' : $_SERVER['SCRIPT_FILENAME']; $tmp2 = realpath(__FILE__); $i = strlen($tmp) - 1; $j = strlen($tmp2) - 1;
while ($i > 0 && $j > 0 && isset($tmp[$i]) && isset($tmp2[$j]) && $tmp[$i] == $tmp2[$j]) {
	$i--; $j--;
}
if (!$res && $i > 0 && file_exists(substr($tmp, 0, ($i + 1))."/main.inc.php")) {
	$res = @include substr($tmp, 0, ($i + 1))."/main.inc.php";
}
if (!$res && $i > 0 && file_exists(dirname(substr($tmp, 0, ($i + 1)))."/main.inc.php")) {
	$res = @include dirname(substr($tmp, 0, ($i + 1)))."/main.inc.php";
}
// Try main.inc.php using relative path
if (!$res && file_exists("../main.inc.php")) {
	$res = @include "../main.inc.php";
}
if (!$res && file_exists("../../main.inc.php")) {
	$res = @include "../../main.inc.php";
}
if (!$res && file_exists("../../../main.inc.php")) {
	$res = @include "../../../main.inc.php";
}
if (!$res) {
	die("Include of main fails");
}

require_once DOL_DOCUMENT_ROOT.'/core/class/html.formfile.class.php';

// Load translation files required by the page
$langs->loadLangs(array("indicadores@indicadores"));

$action = GETPOST('action', 'aZ09');

$socid = GETPOST('socid', 'int');
if (isset($user->socid) && $user->socid > 0) {
	$action = '';
	$socid = $user->socid;
}

$max = 5;
$now = dol_now();

$title = $langs->trans('ListOf', $langs->transnoentitiesnoconv("Gráficas"));
llxHeader("", $title);


print '<div class="fichecenter"><div class="fichethirdleft">';

//Crear conexión base
$conexion = mysqli_connect('localhost','root','','dolibarr')
//insertar tabla, botón y css
?>
<html>
<link rel="stylesheet" type="text/css" href="css-lista.css" media="screen" />
<button class="button1" type="button" onClick="window.location.reload();">Refrescar</button>
<br>
<table class="tabla1">
<th  class="tituloTabla" color="white" colspan="3"><h1 style="color:white;">Gráficas</h1></th>

<tr class="subtitulo">
<td>Nombre</td>
<td>Tipo</td>
<td>Fecha</td>
</tr>


<?php
//pasar datos de la base de datos a la tabla
$sql="SELECT * from llx_const";
$result=mysqli_query($conexion,$sql);

while ($mostrar=mysqli_fetch_array($result)) {
?>

<tr class="subtitulo2">
<td><?php echo $mostrar['name']?></td>
<td><?php echo $mostrar['type']?></td>
<td><?php echo $mostrar['tms']?></td>
</tr>
<?php
}
?>
</table>
</html>

<?php


$NBMAX = $conf->global->MAIN_SIZE_SHORTLIST_LIMIT;
$max = $conf->global->MAIN_SIZE_SHORTLIST_LIMIT;

print '</div></div>';

// End of page
llxFooter();
$db->close();
