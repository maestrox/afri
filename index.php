<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="icon" type="image/gif" href="media/images/animated_favicon1.gif" >
		<title>Kelvin Africano</title>
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
			@import "media/css/themes/base/jquery-ui.css";
			@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom";
		</style>
		    <script src="media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
	        <script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
	        <script src="media/js/jquery.jeditable.js" type="text/javascript"></script>
	        <script src="media/js/jquery-ui.js" type="text/javascript"></script>
	        <script src="media/js/jquery.validate.js" type="text/javascript"></script>
	        <script src="media/js/jquery.dataTables.editable.js" type="text/javascript"></script>
	
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable().makeEditable({
									sUpdateURL: "UpdateData.php",
                					sAddURL: "AddData.php",
                    				sDeleteURL: "DeleteData.php"	
								});
			} );
				$(document).ready(function() {
					/* Init DataTables */
					var oTable = $('#example').dataTable();

					/* Apply the jEditable handlers to the table */
					$('td', oTable.fnGetNodes()).editable( 'actualizar.php', {
						"callback": function( sValue, y ) {
							var aPos = oTable.fnGetPosition( this );
							oTable.fnUpdate( sValue, aPos[0], aPos[1] );
						},
						"submitdata": function ( value, settings ) {
							return {
								"row_id": this.parentNode.getAttribute('id'),
								"column": oTable.fnGetPosition( this )[2]
							};
						},
						"height": "14px"
					} );
				} );
			
		
		</script>
		
</head>
<body id="dt_example" class="ex_highlight_row">
<div id="container">
	<div class="full_width big">
		<i>Pa-Pa- el Kelvin Africano</i> Ejemplo
	</div>		
	<h1>Guardias de Consolitex Semanal </h1>
	<p><i>DataTables</i>Gerentes de la semana: <input name="semana" value="28/03/2011 al 03/04/2011" size = "27">  </p>
	<p><i>Gerente Principal  </i>  Chente</p>
	<p><i>Gerente Auxiliar</i> Chivita </p>
	<h1>Vista</h1>
	
  	<form id="formAddNewRow" action="#" title="AGREGAR NUEVO REGISTRO">
	    <label for="lugar">Lugar	</label><br />
		<input type="text" name="lugar" id="name" class="required" rel="0" />
		<br />
		<label for="horario">Horario</label><br />
		<input type="text" name="horario" id="horario" class="required" rel="1" />
		<br />
		<label for="dia">Lunes</label><br />
		<input type="text" name="dia" id="dia" rel="2" />
		<br />
		<label for="dia2">Martes</label><br />
		<input type="text" name="dia2" id="dia2" rel="3" />
		<br />
		<label for="dia3">Miercoles</label><br />
		<input type="text" name="dia3" id="dia3" rel="4" />
	    <br />
        <label for="dia4">Jueves</label><br />
		<input type="text" name="dia4" id="dia4" rel="5" />
        <br />
        <label for="dia5">Viernes</label><br />
		<input type="text"name="dia5" id="dia5" rel="6"/>
        <br />
       	<label for="dia6">Sabado</label><br />
		<input type="text" name="dia6" id="dia6" rel="7"/>
        <br />
        <label for="dia7">Domingo</label><br />
		<input type="text" name="dia7" id="dia7" rel="8"/>
        <br />
	</form>
	
	
	<div class="demo" id="dynamic">
	<!-->	<button id="btnDeleteRow">Eliminar Fila</button> -->
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
		<thead>
			<tr id="1">
				<th width="20%">Lugar</th>
				<th width="15%">Horario</th>
				<th width="15%">Lunes</th>
				<th width="15%">Martes</th>
				<th width="15%">Miercoles</th>
				<th width="15%">Jueves</th>
				<th width="15%">Viernes</th>
				<th width="15%">Sabado</th>
				<th width="15%">Domingo</th>
			</tr>
		</thead>
		<tbody>
		
	<?php 
	include 'conex1.php'; // abrimos la conexion a la bd
    $sql = "select * from guardias";
    $i=0; 
	if ($buscar = @mysql_query($sql , $conexion)) 	 {  // ejecutamos la sentencia sql 	 {  
    while ($guardia  = @mysql_fetch_array($buscar)) {
	$l= $guardia[lugar];
	$h= $guardia[hora];
	$lu= $guardia[lunes];
	$ma= $guardia[martes];
	$mi= $guardia[miercoles];
	$ju= $guardia[jueves];
	$vi= $guardia[viernes];
	$sa= $guardia[sabado];
	$do= $guardia[domingo];
			echo '<tr class="gradeA" id ='.($i+1).'>';
			echo '<td class="center"> '.$l.'</td>';
			echo '<td >'.$h.'</td>';
			echo '<td class="center">'.$lu.'</td>';
			echo '<td class="center">'.$ma.'</td>';
			echo '<td class="center">'.$mi.'</td>';
			echo '<td class="center">'.$ju.'</td>';
			echo '<td class="center">'.$vi.'</td>';
			echo '<td class="center">'.$sa.'</td>';
			echo '<td class="center">'.$do.'</td>';
			echo '</tr>';

   			$i++;
		}
	}
	else
	   { print "No hay Registros <br>"; }

	@mysql_close($conexion);

	?>
				
		</tbody>
		<tfoot>
				<tr>
					<th>Lugar</th>
					<th>Horario</th>
					<th>Lunes</th>
					<th>Martes</th>
					<th>Miercoles</th>
					<th>Jueves</th>
					<th>Viernes</th>
					<th>Sabado</th>
					<th>Domingo</th>
				</tr>
		</tfoot>
	</table>
	<div class="add_delete_toolbar" >
	</div>
	
</div>				

</body>
</html>