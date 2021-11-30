<?php

class form
{

      public static function alert($tipo, $mensagem)
      {
            if ($tipo == 'erro') {
                  echo '<div style="background="black", color:red; font-size:25px;" >' . $mensagem . '</div>';
                  return false;
            } else if ($tipo == 'sucesso') {
                  echo '<div style="background="black"; color:green; font-size:25px;" >' . $mensagem . '</div>';
                  return true;
            }
      }

      public static function cadastrar($nome, $email, $curso)
      {
            $sql = Mysql::conectar()->prepare("INSERT INTO `formulario` VALUES (null,?,?,?)");
            $sql->execute(array($nome, $email, $curso));
      }
}
