<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Ex2</title>
  </head>
  <body class="container mt-4">
    <h1>Exercício 3</h1>
    <h4>Hífen</h4>

    <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resolucao_ex3.php">
      <div class="row">
      
          <?php 
            for ($i=1; $i<=4; $i++){ 
          ?>

            <div class="col">
                <label for="vl<?=$i?>" class="label-control"> 
                  Informe valor <?=$i?>:
                </label>
                <input type="number" name="vl<?=$i?>"
                  id="vl<?=$i?>" class="form-control"/>
            </div>
          <?php 
            }
          ?>
          
      </div>

      <div class="row">
        <div class="col mt-4">
            <button type="submit" class="btn btn-warning">
              Enviar
            </button>
        </div>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Crie um programa que leia um conjunto de valores inteiros do usuário e os
coloque em um mapa ordenado. Caso o usuário informe valores repetidos,
esses valores devem ser substituídos por hífen (-). 
Exiba o resultado final desse mapa ao usuário-->