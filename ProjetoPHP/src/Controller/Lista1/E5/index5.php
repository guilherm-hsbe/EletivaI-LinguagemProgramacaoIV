<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E5</title>
  </head>

  <body class="container mt-4">
    <h1>Exercício 5</h1>
    <h4>Notas de Aluno</h4>
    
    <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="/resposta5">
      <div class="row">
        <div class="col">
            <label for="n1" class="label-control">
              Informe a primeira nota: 
            </label>
            <input type="number" name="n1"
              id="n1" class="form-control"/>
        </div>

        <div class="col">
            <label for="n2" class="label-control">
                Informe a segunda nota:
            </label>
            <input type="number" name="n2"
              id="n2" class="form-control"/>
        </div>

        <div class="col">
            <label for="n3" class="label-control">
                Informe a terceira nota:
            </label>
            <input type="number" name="n3"
              id="n3" class="form-control"/>
        </div>

        <div class="col">
            <label for="n4" class="label-control">
                Informe a quarta nota: 
            </label>
            <input type="number" name="n4"
              id="n4" class="form-control"/>
        </div>
      </div>

      <div class="row">
        <div class="col mt-4">
            <button type="submit" class="btn btn-warning">
              Enviar
            </button>
        </div>
      </div>
    </form>

    
    <?php
      if (isset($n1,$n2,$n3,$n4)){
    ?>

    <div class="mt-3 p-4 border border-light border-2 rounded"> 
      h4>Resposta</h4>
      
      <?php
        echo "Primeira Nota: $n1<br/>
        Segunda Nota: $n2<br/>
        Terceira Nota: $n3<br/>
        Quarta Nota: $n4<br/>";

        if ($n1 < 0 or $n2 < 0 or $n3 < 0 or $n4 < 0) 
            echo ("<br/>Um ou mais valores são inválidos!");
      
        else{
            echo "<br/>Valor da média: ".($media = ($n1 + $n2 + $n3 + $n4) / 4)."<br/>";

            if ($media >= 7)
                echo "Aprovado!";

            else
                echo "Reprovado!";
            }
        }
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<!--Desenvolva um programa que receba quatro notas de um aluno,
calcule e imprima a média aritmética das notas e a mensagem de
aprovado para média superior ou igual a 7.0 ou a mensagem de
reprovado para média inferior a 7.0-->