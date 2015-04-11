<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Select Menu</title>
 <link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.css">
 <script src="jquery.mobile/jquery.js"></script>
 <script src="jquery.mobile/jquery.mobile-1.4.5.js"></script>
</head>
<body>
 <div data-role="page" data-theme="a">
  
  <div data-role="header">
   <h1>Select Menu</h1>
  </div>
  
  <div data-role="main">
   <div class="ui-content">
    <form method="POST">
     <label for="select-1">Básico:</label>
     <select name="select-1">
      <option value="1">Uno</option>
      <option value="2">Dos</option>
      <option value="3">Tres</option>
     </select>
      
     <label for="select-2">Select con menú emergente:</label>
     <select name="select-2" data-native-menu="false">
      <option value="1">Uno</option>
      <option value="2">Dos</option>
      <option value="3">Tres</option>
     </select>
      
     <label for="select-3">Select con dimensiones reducidas y cambiando el icono de posición:</label>
     <select name="select-3" data-native-menu="false" data-mini="true" data-iconpos="left">
      <option value="1">Uno</option>
      <option value="2">Dos</option>
      <option value="3">Tres</option>
     </select>
      
     <label for="select-4">Select con opción seleccionada por defecto y opción desactivada:</label>
     <select name="select-4" data-native-menu="false">
      <option value="1">Uno</option>
      <option value="2" selected="selected">Dos</option>
      <option value="3" disabled="disabled">Tres</option>
     </select>
      
     <label for="select-5">Select con grupo de opciones:</label>
     <select name="select-5" data-native-menu="false">
     <optgroup label="Grupo 1">
      <option value="1">Uno</option>
      <option value="2">Dos</option>
      <option value="3">Tres</option>
     </optgroup>
     <optgroup label="Grupo 2">
      <option value="4">Cuatro</option>
      <option value="5">Cinco</option>
      <option value="6">Seis</option>
     </optgroup>
     </select>
      
     <label for="select-10">Select con grupo de opciones:</label>
     <select name="select-10" data-native-menu="false" class="filterable-select">
      <option value="1">Uno</option>
      <option value="2">Dos</option>
      <option value="3">Tres</option>
      <option value="4">Cuatro</option>
      <option value="5">Cinco</option>
      <option value="6">Seis</option>
      <option value="7">siete</option>
      <option value="8">ocho</option>
      <option value="9">nueve</option>
      <option value="10">diez</option>
     </select>
      
     <fieldset data-role="controlgroup" data-type="horizontal" data-theme="b">
      <label for="group-select-1">Select 1</label>
      <select name="group-select-1" data-native-menu="false">
       <option value="1">Uno</option>
       <option value="2">Dos</option>
       <option value="3">Tres</option>
      </select>
      <label for="group-select-2">Select 2</label>
      <select name="group-select-2" data-native-menu="false">
       <option value="1">Uno</option>
       <option value="2">Dos</option>
       <option value="3">Tres</option>
      </select>
     </fieldset>
      
    </form>
   </div>
  </div>
  
  <div data-role="footer">
   <div class="ui-content">
    <small>© Tutorial jQuery Mobile</small>
      </div>
     </div>
   
   </div>
</body>
</html>