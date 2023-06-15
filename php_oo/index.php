<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Cadastro</title>
 <!--CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class= "row">
      <div class="col-md-12 mt-4">
        <h1 class="text-center">
            Sistema de cadastro
        </h1>

</div>
<div class="row">
    <div class="col-md-5 mx-auto">
    <?php 
    require_once 'model.php';
    $model = new Model();
    $insert = $model->insert();
    ?>    
    
    <form action="" method="post">
           <div class="form-group">
               <label for="">Nome</label>
               <input type="text" name="name">
           </div>
        
           <div class="form-group">
               <label for="">E-mail</label>
               <input type="text" name="email">
           </div>
       
           <div class="form-group">
               <label for="">Whatsapp</label>
               <input type="text" name="whatsapp">
           </div>
        
           <div class="form-group">
               <label for="">Endereço</label>
               <textarea name="address"rows="3" class="form-control"></textarea>
           </div>
           <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        </form>   
    </div>

</div>
</div>
</div>


</body>
</html>