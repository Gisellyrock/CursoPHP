<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>

  <?php 
    // $num = 0x1A;
    // echo "O valor da variável é $num";

    // $v = 300;
    // var_dump($v);

    // $num = 3e2;
    // // echo "O valor é $num"
    // var_dump($num);     
    

    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet)

    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    
    
  ?>
</body>

</html>