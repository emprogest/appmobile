<?php
    include_once('conexion1.php');
    include_once('function.php');
    
    $result = mysql_query("SELECT * FROM camaras10", $link);

    $ciudad     ="CAPITAL+FEDERAL";
    $provincia  ="BUENOS+AIRES";
    $pais       ="ARGENTINA";

    while($row=mysql_fetch_row($result))
    
        {
            $nuevo  =   ltrim( str_replace(" ","+",$row[2]) );
            $nuevo1 =   rtrim($nuevo,'+');
            $nuevo2 =   $nuevo1."+".$ciudad."+".$provincia."+".$pais;
            $url="http://maps.google.com/maps/api/geocode/json?address=".$nuevo2."&sensor=false";     
            $jsonstr = CallAPI("GET",$url);
            $obj=json_decode($jsonstr, true);
            $id_row =$row[0];
            $lat    =$obj['results'][0]['geometry']['location']['lat'];
            $lng    =$obj['results'][0]['geometry']['location']['lng'];
            echo $id_row;
            echo $lat;
            echo $lng;
            $strsql ="UPDATE camaras10 SET latitud=".$lat." , longitud=".$lng." where ID=".$id_row;
            echo $strsql;
            $retval =mysql_query($strsql,$link);
            echo $retval;
    }

?>
