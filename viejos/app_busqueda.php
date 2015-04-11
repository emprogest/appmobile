<head>
    <meta http-equiv="Content-type" content="text/html"; charset="utf-8">
    <link rel='stylesheet' type='text/css' href="app_busqueda.css"/>   
</head>

<body>

    <script>

    </script>    

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $busca=$_POST['busca'];
                include('conexion1.php');
                if($busca!="")
                    {
                        $busqueda=mysql_query("select * from camaras where centro LIKE '%$busca%'");
                        while($muestra=mysql_fetch_array($busqueda))
                    {
    ?>    
    
    <h1>Resize the window</h1>

    <form>
        <div class="form-element textfield">
          <input type="text">
        </div>

      <div class="form-element submit-btn">
        <input type="submit" value="Search">
      </div>

    </form>

</body>
