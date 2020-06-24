<?php $render('header'); ?>

<h2>Adicionar Nova Lei</h2>

<form method="POST" action="<?=$base;?>/leis/add" enctype="multipart/form-data">

<label>
    <input type="hidden" >
</label>

<label>
    Número da lei:<br/>
    <input type="text" name="numero"/>
</label><br/><br/>

    <label>
        Descrição:<br/>
        <input type="text" name="descricao" />
    </label><br/><br/>
    <label>
        Ano:<br/>
        <input type="text" name="ano" />
    </label><br/><br/>
    <label>
        Data da Publicação:<br/>
        <input type="date" name="dia" />
    </label><br/><br/>
    <label>
        Arquivo:<br/>
        <input type="file" name="arquivo" />
    </label><br/><br/>
    

    <input type="submit" value="Adicionar"/>
</form>

<?php $render('footer'); ?>