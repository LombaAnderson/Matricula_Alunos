<?php

include('config.php');
Mysql::conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="form.css" rel="stylesheet">
      <title>Matrícula de Alunos</title>
</head>

<body>


      <div class="form_cd">


            <?php

            if (isset($_POST['acao'])  && $_POST['form'] == 'f_form') {
                  $nome = $_POST['nome'];
                  $email = $_POST['email'];
                  $curso = $_POST['curso'];

                  if ($nome == '') {
                        Form::alert('erro', 'O nome precisa ser preenchido!');
                  } else if ($email == '') {
                        Form::alert('erro', 'O email precisa ser preenchido!');
                  } else if ($curso == '') {
                        Form::alert('erro', 'O campo curso precisa ser preenchido!');
                  } else {
                        Form::cadastrar($nome, $email, $curso);
                        Form::alert('erro', 'Usuario' . $nome . 'Cadastrado com sucesso!');
                  }
            }
            ?>


            <h1>Cadastro de alunos</h1>
            <form method="POST">
                  <div> <input type="text" name="nome" placeholder="Nome completo do aluno"></div>
                  <div> <input type="text" name="email" placeholder="E-mail"> </div>
                  <div> <input type="text" name="curso" placeholder="Curso"> </div>
                  <div> <input type="submit" name="acao" value="Cadastrar"></div>
                  <div> <input type="hidden" name="form" value="f_form"></div>

            </form>
      </div>
      <!--form_cd-->

</body>

</html>