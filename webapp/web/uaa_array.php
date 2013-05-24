<?php
	header('Content-Type: text/html; charset=UTF-8'); 
	$enlace =  mysql_connect('localhost', 'root', '');
	if (!$enlace) {
	    die('No pudo conectarse: ' . mysql_error());
	}

	mysql_select_db("cgfie");
	$SQL = "SELECT nom_ua, abrv_ua, nv_ua FROM uaa";
	$resultado = mysql_query($SQL);	
	$cont = 1;
	$clas_uaa=array(1=>"Unidades Administrativas", 2=>"Unidades Académicas de Nivel Medio Superior", 3=>"Unidades Académicas del Nivel Superior", 4=>"Unidades Académicas de Investigación Científica y Tecnológica", 5=>"Unidades Académicas de Educación Continua", 6=>"Unidades Académicas de Apoyo Educativo", 7=>"Unidades de Apoyo a la Innovación Educativa", 8=>"Unidades de Apoyo a la Investigación, al Desarrollo y Fomento Tecnológico y Empresarial", 9=>"Clusters Politécnicos");


	while ($fila = mysql_fetch_assoc($resultado)) 
	{	
	    
	    $object = 
	    	'
		    	$entity'.$cont.' = new StdClass();<br>
		    	$entity'.$cont.'->name = "'.$fila["nom_ua"].'";<br>
		    	$entity'.$cont.'->acronym = "'.$fila["abrv_ua"].'";<br>
		    	$entity'.$cont.'->level = "'.$clas_uaa[(int)$fila["nv_ua"]].'";<br>
		    	array_push($entities, $entity'.$cont.');<br><br>
	    	';


	   echo $object;

	   $cont ++;
	}

	mysql_close($enlace);	
?>