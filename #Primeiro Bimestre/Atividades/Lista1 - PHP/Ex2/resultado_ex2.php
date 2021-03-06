<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP Ex2</title>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">
    <h1>Exercício 2</h1>
    <h4>Peso</h4>
    
    <?php
      $valorquilo = $_POST['valorquilo']; 
      $quantquilo = $_POST['quantquilo'];

      if ($valorquilo <= 0 or $quantquilo <= 0)
        echo ("Um ou mais valores são inválidos!");

      else
        echo "O valor do quilo (R$) é: $valorquilo <br/> 
            A quantidade de quilos (kg) é: $quantquilo <br/>
            <br/>O valor final a ser pago é de : R$ ".$valorquilo * $quantquilo;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Faça um programa que receba o valor do quilo de um produto e a
quantidade de quilos do produto consumida, calculando o valor final
a ser pago.-->