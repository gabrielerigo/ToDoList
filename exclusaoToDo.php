<?php

    include './conectaBanco.php';
    
    $toDel = isset($_POST['toDel']) ? $_POST['toDel'] : false;
    
    $sql = "DELETE FROM to_do WHERE ID = '$toDel'";
    $query = mysql_query($sql);

    /*if ($query) {
        echo "Removido com sucesso";
    } else {
        echo "falha ao tentar remover dado";
    }*/
?>