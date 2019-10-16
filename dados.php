<?php

//ENTRADA -> form.html, METODO -> get (via url)
$Nota1= $_GET['nota1'];
$Nota2= $_GET ['nota2'];
$Nota3= $_GET ['nota3'];


$media = $Nota1+$Nota2+$Nota3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal" action="dados.php" method="GET">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Calcular soma</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="numero1">Nota 1</label>  
          <div class="col-md-4">
          <input id="nota1" name="nota1" type="text" placeholder="nota1" class="form-control input-md" required="">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Nota2">Nota2</label>  
          <div class="col-md-4">
          <input id="nota2" name="nota2" type="text" placeholder="nota2" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Nota 3">Nota3</label>  
          <div class="col-md-4">
          <input id="nota3" name="nota3" type="text" placeholder="nota3" class="form-control input-md">
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Média">Media</label>
          <div class="col-md-4">
            <button id="media" name="media" class="btn btn-primary">Média</button>
          </div>
        </div>
        
        </fieldset>
        </form>

        <div>
            resultado: <?php echo $media; ?>
</div>
</body>
</html>