<?php

	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_base="guardia";
	@$link=mysql_connect($db_host,$db_user,$db_pass);

	if(!$link)
		{
			echo "Error al conectar con la Base.<br>";
		      die();

		}
	if(!mysql_select_db($db_base,$link))
		{
			echo "Error al conectar a la Tabla.<br>";
		}
	
?>