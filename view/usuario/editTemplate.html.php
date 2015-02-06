<?php use mvc\routing\routingClass as routing;?>
<?php use mvc\i18n\i18nClass as i18m;?>
<?php use mvc\view\viewClass as view?>
<?php $user = usuarioTableClass::USER?>
<div class="container container-fluid">
    <h1>Editar Usuario <?php echo $objUsuario[0]->$user ?></h1>
    <?php view::includePartial('usuario/formUser',array('objUsuario' => $objUsuario, 'user'=> $user));?>
</div>

