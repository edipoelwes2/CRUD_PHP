<?php
require 'config.php';
?>
<a href="adicionar.php">Adcionar Novo Usuário</a>
<br> <br>
<table border="1px" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>

    <?php
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuario){
                echo '<tr>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                echo '<tr>';
            }
        }
    ?>
</table>