

<!DOCTYPE html>	
<html lang="en">
<head>
  <title>Compra do Jogo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
</head>
<body>

<div class="container">
<div class="bg-warning">

<br> <p> <center> <b> <h1> Compra do Jogo </h1> </b> </center>

<img src="faith.png" class="rounded-circle" alt="Faith" width="304" height="236"> 


<form action="usuario_submit.php" class="alt" method="POST">

  <div class="container">
    <div class="row">
      <div class="col-2" >
        Primeiro nome: 
      </div>
      <div class="col-sm">
        <input type="text" name="firstname" id="firstname">
      </div>
    </div>
    <div class="row">
      <div class="col-2" >
        Último nome: 
      </div>
      <div class="col-sm">
        <input type="text" name="lastname" id="lastname">
      </div>
    </div>
    <div class="row">
      <div class="col-2" >
        Telefone:
      </div>
      <div class="col-sm">
        <input type="text" name="tel" id="tel">
      </div>
    </div>
    <div class="row">
      <div class="col-2" >
        E-mail:
      </div>
      <div class="col-sm">
        <input type="text" name="useremail" id="useremail">
      </div>
    </div>
    <div class="row">
      <div class="col-2" >
        Código do cartão:
      </div>
      <div class="col-sm">
        <input type="text" name="cartao" id="cartao">
      </div>
    </div>
  </div>

  <input class="btn btn-success" value="Submit" name="submit" type="submit">




</form>

  
  </div>
   

</div>
</body>
</html>
