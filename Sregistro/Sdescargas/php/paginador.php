<?php 
require("conexion.php");

$pag_sql = "SELECT * FROM archivos";

$pag_num_result = mysqli_query($conexion, $pag_sql) or die(mysqli_error());

$pag_num = 6;

$pag_nav_num_enlaces = 3;


$pag_mostrar_errores = false;

$pag_nav_anterior = "&lt;";

$pag_nav_sgte = "&gt;";

if (!isset($pag_nav_primera)) {
	$pag_nav_primera = "&laquo;&laquo; Primera";
}
if (!isset($pag_nav_ultima)) {
	$pag_nav_ultima = "&Uacute;ltima";
}

if (empty($_GET['_pagi_pg'])) {
	$pag_actual = 1;
}else{
	$pag_actual = $_GET['_pagi_pg'];
}

$pagi_result2 = $pag_num_result;

if ($pagi_result2 == false && $pagi_mostrar_errores == true) {
	die("Error en la consulta de conteo alternativo de registros: $pag_sql. Mysql dijo: <b>".mysqli_error()."</b>");
}

$pag_total_reg = mysqli_num_rows($pagi_result2);

$pag_total_pag = ceil($pag_total_reg / $pag_num);

$pag_query_string = "?";

$pag_enlace .= $pag_query_string;

$pag_navegacion_temporal = array();

if ($pag_actual != 1) {
	$pag_url = 1;
	$pag_navegacion_temporal[] = "<a id='paginas1' href='".$pag_enlace."_pagi_pg=".$pag_url."'>$pag_nav_primera</a>";

	$pag_url = $pag_actual -1;

	$pag_navegacion_temporal[] ="<a id='paginas1' href='".$pag_enlace."_pagi_pg=".$pag_url."'>$pag_nav_anterior</a>";
}


if (!isset($pag_nav_num_enlaces)) {
	$pag_nav_desde =1;
	$pag_nav_hasta = $pag_total_pag;
} else {
	$pag_nav_intervalo = ceil($pag_nav_num_enlaces / 2) - 1;

	$pag_nav_desde = $pag_actual - $pag_nav_intervalo;

	$pag_nav_hasta = $pag_actual + $pag_nav_intervalo;


    if ($pag_nav_desde < 1) {
		$pag_nav_hasta -= ($pag_nav_desde - 1);
		$pag_nav_desde = 1;
}

if ($pag_nav_hasta > $pag_total_pag) {
	$pag_nav_desde -= ($pag_nav_hasta - $pag_total_pag);
	$pag_nav_hasta = $pag_total_pag;

	if ($pag_nav_desde < 1) {
		$pag_nav_desde = 1;
		 
	}
}

}

for ($pag_i = $pag_nav_desde; $pag_i <=$pag_nav_hasta ; $pag_i++) { 
	if ($pag_i == $pag_actual) {
		$pag_navegacion_temporal[] = "<span id='paginas2'>$pag_i</span>";
	} else {
		$pag_navegacion_temporal[] = "<a id='paginas1' href='".$pag_enlace."_pagi_pg=".$pag_i."'>".$pag_i."</a>";
	}
}

if ($pag_actual < $pag_total_pag) {
	$pag_url = $pag_actual + 1;

	$pag_navegacion_temporal[] = "<a id='paginas1' href='".$pag_enlace."_pagi_pg=".$pag_url."'>$pag_nav_sgte</a>";


	$pag_url = $pag_total_pag;

	$pag_navegacion_temporal[] = "<a id='paginas1' href='".$pag_enlace."_pagi_pg=".$pag_url."'>$pag_nav_ultima</a>";
}

$pag_navegacion = implode($pag_separador, $pag_navegacion_temporal);


$pag_inicial = ($pag_actual - 1) * $pag_num;

$pag_sql = "SELECT * FROM archivos LIMIT $pag_inicial,$pag_num";

$pag_sqllim = mysqli_query($conexion, $pag_sql);

$pag_desde = $pag_inicial + 1;

$pag_hasta = $pag_inicial + $pag_num;

if ($pag_hasta > $pag_total_reg) {
	
	$pag_hasta  =$pag_total_reg;
}

$pag_info = "del <b>$pag_desde</b> al <b>$pag_hasta</b> de <b>$pag_total_reg</b>";

 ?>

