<?php $render('header'); ?>

<h2>editar  Leis</h2>

<form method="POST" action="<?=$base;?>/leis/<?=$lei['id'];?>/editar">
<label>
    Número da lei:<br/>
    <input type="text" name="numero" value="<?=$lei['numero'];?>"/>
</label><br/><br/>

    <label>
        Descrição:<br/>
        <input type="text" name="descricao" value="<?=$lei['descricao'];?>"/>
    </label><br/><br/>
    <label>
        Ano:<br/>
        <input type="text" name="ano" value="<?=$lei['ano'];?>"/>
    </label><br/><br/>
    <label>
        Data:<br/>
        <input type="date" name="dia" value="<?=$lei['dia'];?>"/>
    </label><br/><br/>
    <label>
        Arquivo:<br/>
        <input type="file" name="arquivo" value="<?=$lei['arquivo'];?>"/>
    </label><br/><br/>


    <input type="submit" value="Salvar"/>
</form>

<?php $render('footer'); ?>