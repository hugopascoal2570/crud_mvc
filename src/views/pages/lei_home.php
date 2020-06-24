<?php $render('header'); ?>


<a href="<?=$base;?>/leis/add">Nova Lei</a>
<?php

?>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Número</th>
        <th>Descrição</th>
        <th>Ano</th>
        <th>dia</th>
        <th>Arquivo</th>
        <th>Ações</th>

    </tr>
    <?php foreach($leis as $lei):?>
    <tr>
        <td><?=$lei['id'];?></td>
        <td><?=$lei['numero'];?></td>
        <td><?=$lei['descricao'];?></td>
        <td><?=$lei['ano'];?></td>
        <td><?=$lei['dia'];?></td>
        <td><?=$lei['arquivo'];?></td>

        <td>
            <a href="<?=$base;?>/leis/<?=$lei['id'];?>/editar"><img width="20" src="<?=$base;?>/assets/images/document.png" alt=""/></a>
            <a href="<?=$base;?>/leis/<?=$lei['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')"><img width="20" src="<?=$base;?>/assets/images/trash.png" alt=""/></a>
        </td>

    </tr>
    <?php endforeach; ?>

</table>
<?php $render('footer'); ?>