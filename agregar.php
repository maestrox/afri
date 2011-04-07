<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="author" content="pablo marval">
	<!-- Date: 2011-04-05 -->

	<title>Kelvin Africano</title>
	<style type="text/css" title="currentStyle">
		@import "media/css/demo_page.css";
		@import "media/css/cmxform.css";
		@import "media/css/demo_table.css";
		@import "media/css/themes/base/jquery-ui.css";
		@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom.css";
	</style>

 	<script src="media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="media/js/jquery.jeditable.js" type="text/javascript"></script>
    <script src="media/js/jquery-ui.js" type="text/javascript"></script>
    <script src="media/js/jquery.validate.js" type="text/javascript"></script>
    <script src="media/js/jquery.dataTables.editable.js" type="text/javascript"></script>

<script type="text/javascript"> 
	$(function() {
		$("#semanaini").datepicker();
	});
	$(function() {
		$("#semanafin").datepicker();
	});
</script> 

<script type="text/javascript">

	$("#signupForm2").validate({
	   submitHandler: function(form) {
	   form.submit();
	}
    });
	$("#signupForm").validate({
	   submitHandler: function(form) {
	   form.submit();
	}
    });
	$().ready(function() {
		$("#commentForm").validate();
		$("#signupForm").validate({
			rules: {
				nombrep: "required",
				nombrea: "required",
				semana: "required"	
			},
			messages: {
				nombrep: "Por Favor ingrese el nombre del Gerente Principal!",
				nombrea: "Por Favor ingrese el nombre del Gerente Auxiliar!",
				semana: "Coloque la Fecha!"
			}
		});
		$("#signupForm2").validate({
			rules: {
				codigov: "required"
			},
			messages: {
				codigov: "Por Favor ingrese el codigo del vendedor!"
			}
		});
	});
;
	jQuery(function($){
		$.datepicker.regional['es'] = {
			closeText: 'Cerrar',
			prevText: '&#x3c;Ant',
			nextText: 'Sig&#x3e;',
			currentText: 'Hoy',
			monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
			'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
			'Jul','Ago','Sep','Oct','Nov','Dic'],
			dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
			dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
			weekHeader: 'Sm',
			dateFormat: 'dd/mm/yy',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			yearSuffix: ''};
		$.datepicker.setDefaults($.datepicker.regional['es']);
	});	
	function validarNum(event, element, _float){
		event = event || window.event;
		var charCode = event.keyCode || event.which;
		var first = (charCode <= 57 && charCode >= 48);
	    if(_float){
	        var element = event.srcElement || event.target;
	        return first || (element.value.indexOf('.') == -1 ? charCode == 46 : false);
	    }
	    return first;
	}
	
</script>				
</head>	
<body>
<h2 align="center">Area de agregar datos</h2>	

<form class="cmxform" id="signupForm" action="agregardatos.php" method="post">
	
<fieldset>
	<h3>DATOS DE ENCABEZADO</h3>
	<div class="demo"> 
		<p align="center">Ingrese la Semana del: <input id="semanaini" name="semanaini" size="11" type="text"/> al : <input id="semanafin" name="semanafin" size="11" type="text"/></p>
	</div>
	<p>
		<label for="nombrep">Nombre del Gerente Principal:   </label>
		<input id="nombrep" name="nombrep" class="required" minlength="2" size="20" type="text"/> 	
    </p>
	<p>
		<label for="lugarp">Lugar(es) del Gerente Principal:</label>
		<input id="lugarp" name="lugarp" size="20" type="text"/> 	
    </p>
    </hr>
	<p>
		<label for="nombrea">Nombre del Gerente Principal:   </label>
		<input id="nombrea" name="nombrea" class="required" minlength="2" size="20" type="text"/> 	
    </p>
	<p >
		<label for="lugara">Lugar(es) del Gerente Auxiliar:</label>    
		<input id="lugara" name="lugara" size="20" type="text"/> 
	</p>

	<p align="center"><input type="reset" value="Reset"> <input type="submit" value="Guardar"></p>
</fielset>	
	
</form>	
	</hr>
<form class="cmxform" id="signupForm2" action="agregavendedor.php" method="post">
<fieldset>	
	<h3>DATOS DE LOS VENDEDORES</h3>
	<p>
		<label for="nombrev">Nombre del Vendedor</label>
		<input id="nombrep" name="nombrep" minlength="2" size="20" type="text"/> 	
    </p>
	<p>
		<label for="codigov">Codigo del vendedor: </label>
		<input id="codigov" name="codigov" class="required" minlength="2" size="20" type="text"/> 	
    </p>
	<p >
		<label for="calificar">Calificacion de la semana anterior</label>  
		<p>  Su distinción: <SELECT name="calificar" SIZE="1"> 
		   <OPTION VALUE="0">Normal</OPTION> 
		   <OPTION VALUE="1">Excelente</OPTION> 
		</SELECT>
		
	</p>
<p align="center"><input type="reset" value="Reset"> <input type="submit" value="Guardar"></p>
	
</fielset>	

</form>	
	
	
</body>
</html>