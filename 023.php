    <?php

        $mi_pdf ='Planos/MT/023-pozos.pdf'; 
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
        readfile($mi_pdf);

    ?>
