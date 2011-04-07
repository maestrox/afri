<?php 


	$val= $_POST['value'];// se trae el valor cambiado en el grid 
	$b= $_POST['column']; // trae la columna es decir el dia de la semana
	$id= $_POST['row_id']; // trae la fila

include 'conex1.php'; // abrimos la conexion a la bd

// aca tengo pensado primero seleccionar el valor a editar o el valor anterior en la bd , luego se arroja a una posicion libre cumpliendo 
//las validaciones (clases) , para luego actualizar la base de datos con el valor ingresado en el grid

switch ($b) {
    case 0:
        echo "lugar";
        break;
    case 1:	$q = "UPDATE guardias 
				set hora = '$val' 
				where id = '$id'";
        break;
    case 2:
        	$q = "UPDATE guardias 
					set lunes = '$val' 
					where id = '$id'";
        break;
   	case 3:
        	$q = "UPDATE guardias 
				set martes = '$val' 
				where id = '$id'";			
        break;
    case 4:
         	$q = "UPDATE guardias 
				set miercoles = '$val' 
				where id = '$id'";		
        break;
    case 5:
        	$q = "UPDATE guardias 
					set jueves = '$val' 
					where id = '$id'";				
        break;
	case 6:
        	$q = "UPDATE guardias 
					set viernes = '$val' 
					where id = '$id'";				
        break;
    case 7:
        	$q = "UPDATE guardias 
					set sabado = '$val' 
					where id = '$id'";				
        break;
    case 8:
       	    $q = "UPDATE guardias 
				set domingo = '$val' 
				where id = '$id'";				
break;
}


//$q = “update tabla1 set edad = edad + 100 ”; 
//$query = "SELECT * FROM guardias WHERE (id = ".$c."AND ".$dia  ;
//$tabla = mysql_query($query);
//$array = mysql_fetch_array($tabla);

//SELECT lunes, martes, miercoles, jueve, viernes, sabado, domingo FROM guardias ORDER BY id ASC
/*
$q = "UPDATE guardias 
		set $dia = '$val' 
		where id = '$id'";
mysql_query($q, $conexion) or die ("problema con query");
echo $_POST['value'].' (Actualizado)'.$dia;
*/
$cambiando = @mysql_query($q , $conexion); // ejecutamos la sentencia sql 	   
if (@mysql_affected_rows() > 0) // verificamos que se haya modificado algun registro
  { $log = $val." modificado"; }
else    { $log = "El registro [ $b ] no fue  modificado";  }
print $log;
@mysql_close($conexion);

/*
$sql = "INSERT INTO guardias  VALUES (NULL,)";
if ($agregar = @mysql_query($sql , $conexion)) // ejecutamos la sentencia sql 
   { $log = "Registro agregado correctamente en la base de datos"; }
else  { $log = "Error inesperado en la insercion del registro en la base de datos"; }
echo $log;
@mysql_close($conexion); // cerramos la conexion a la base de datos 
*/
?>

