<?php
    include_once('conexion.php');
    include_once('function.php');
    
    $result = mysql_query("SELECT * FROM camaras limited 2", $link);

    $ciudad     ="CAPITAL+FEDERAL";
    $provincia  ="BUENOS+AIRES";
    $pais       ="ARGENTINA";

    //echo ("<table>");
   	//echo ("<tr>");

    while($row=mysql_fetch_row($result))
    
        {
            $nuevo  =   ltrim( str_replace(" ","+",$row[2]) );
            $nuevo1 =   rtrim($nuevo,'+');
            $nuevo2 =   $nuevo1."+".$ciudad."+".$provincia."+".$pais;
            //printf("<tr><td>%s</td>",$nuevo2); 
            $url="http://maps.google.com/maps/api/geocode/json?address=".$nuevo2."&sensor=false";     
            $jsonstr = CallAPI("GET",$url);
            //print_r($jsonstr);
            //echo $url;
            //$obj=json_decode($jsonstr);
            $obj=json_decode($jsonstr, true);
            //echo $obj['results']['geometry']['location']['lat'];
            //foreach( $obj['results'][0]['geometry']['location'] as $key => $value)
            //    {
            //        echo $key;
            //        echo $value;
            //    }
            //echo $obj['results'][0]['geometry']['location']['lat'];
            //echo $obj['results'][0]['geometry']['location']['lng'];    
        
            $id_row =$row[0];
            $lat    =$obj['results'][0]['geometry']['location']['lat'];
            $lng    =$obj['results'][0]['geometry']['location']['lng'];
            echo $id_row;
            echo $lat;
            echo $lng;
            $strsql ="UPDATE CAMARAS SET latitud=".$lat." , longitud=".$lng." where ID=".$id_row;
            echo $strsql;
            $retval =mysql_query($strsql,$link);
            echo $retval;
    }
?>
