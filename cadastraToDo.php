<?php

try {
    include './conectaBanco.php';

    $toDo = false;
    if (isset($_POST['toDo'])) {
        $toDo = $_POST['toDo'];
    }

    $id = isset($_GET['id']) ? $_GET['id'] : false;

    //Método GET
    /* if (isset($_GET['toDo'])){
      $toDo = $_GET['toDo'];
      }
     */

    if (!$toDo) {
        throw new \Exception("Faltando parâmetro toDo");
    }

   // echo "nome que sera inserido: " . $toDo;
   // echo '';
    $sql = "INSERT INTO to_do (toDo) VALUES('$toDo')";
    $consulta = mysql_query($sql);

    if (!$consulta) { // mesma coisa que if ($consulta == false)
        throw new \Exception("falha ao inserir: " . mysql_error());
    }
} catch (\Exception $ex) {
    echo "Falha geral: " . $ex->getMessage();
}
?>
