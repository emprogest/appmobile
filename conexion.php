<?php

//$db_host="localhost";
//$db_user="root";
//$db_pass="";
//$db_base="guardia";

$mysql_host 	= "mysql17.000webhost.com";
$mysql_user 	= "a3230210_emergen";
$mysql_password = "agustin45";
$mysql_database = "a3230210_emergen";

//$link=mysql_connect($db_host,$db_user,$db_password);
//if(!$link)
//	{
//		echo "Error al conectar con la Base.<br>";
//	}
//if(!mysql_select_db($db_base,$link))
//	{
//		echo "Error al conectar a la Tabla.<br>";
//	}

$link=mysql_connect($mysql_host,$mysql_user,$mysql_password);
if(!$link)
	{
		echo "Error al conectar con la Base.<br>";
	}
if(!mysql_select_db($mysql_database,$link))
	{
		echo "Error al conectar a la Tabla.<br>";
	}
	
?>