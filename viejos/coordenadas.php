<?php
    include_once('conexion1.php');
    
    $result = mysql_query("SELECT * FROM camaras", $link);

    echo ("<table>");
    echo ("<tr>");

    while($row=mysql_fetch_row($result))
        {
            //printf("<tr><td>%s</td>",$row[2]);
            //echo "<td>".$row[2]."</td>";
            //echo "<tr>";
            $nuevo  = str_replace(" ","+",$row[2]);
            printf("<tr><td>%s</td>",$nuevo); 
        }

?>
