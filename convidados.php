<?php include "conexao.php"?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.budle.min.js"></script>
    <!--BootStrap - OnLine
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    -->
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
  <div class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded  text-center">
    <h1>Lista convidados</h1>
  </div>
  

<form class="row g-3 mt-4" action="#" method="GET"> <!-- Novo 24/08/22 -->
  <div class="col-auto">
    <label for="nome" class="visually-hidden">Nome</label> 
    <input type="text" class="form-control"  placeholder="Nome" name="nome">
  </div>
  <div class="col-auto">
    <label for="acompanhantes" class="visually-hidden"></label>
    <input type="text" class="form-control" id="acompanhantes" placeholder="acompanhantes" name="acompanhantes">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
  </div>
</form>
</div>

<div class="container mt-3">
             
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome convidados</th>
        <th>Quantidade de acompanhantes</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($resultado as $convidado) : ?>
      <tr>
        <td><?php echo $convidado['id_convidado']?></td>
        <td><?php echo $convidado['nome']?></td>
        <td><?php echo $convidado['acompanhantes']?></td>
        <td><button type="button" class="btn btn-warning">Editar</button></td>
        <td><button type="button" class="btn btn-danger">Excluir</button></td>
        
        
      </tr>
      <?php endforeach;?>
      
    </tbody>
  </table>
</div>

</body>
</html>


  </body>
</html>