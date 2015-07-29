<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>To Do List</title>
        <link href="estilos.css" type="text/css" rel="stylesheet"/>
        <script src="jquery.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </head>
    <body>
        <div>
            <h1>O que fazer?</h1>
            <input type="text" id="entradaUsuario" name="text" placeholder="O que fazer?"/>
            <button id="addToDo"> Ok! </button>
        </div>
        <br>
        <br>
    <src img="img.png" alt="img" id="apagaItem" width="100px">
        <div id="items">
            <?php
            include './conectaBanco.php';

            $sql = "SELECT * FROM to_do ORDER BY id";
            $query = mysql_query($sql);

            /*
              $item = mysql_fetch_object($query);

              $id = $item->id;
              $toDo = $item->toDo;

              echo $id . ' - ';
              echo $toDo . '<br/>';
             */

            while ($item = mysql_fetch_object($query)) {
                $id = $item->id;
                $toDo = $item->toDo;

                echo
                '<p class="item pendente">
                            <input type="checkbox" name="checkbox" class="one"/>
                            <label>' . $toDo . '</label>
                            <img element_id="' . $id . '" class="excluir" src="imagens/lixeira.png"/>
                    </p>';
            }
            ?>
        </div>
    </body>
</html>
