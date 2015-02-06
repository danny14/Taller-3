<?php use mvc\routing\routingClass as routing;?>
<?php use mvc\i18n\i18nClass as i18m;?>
<?php use mvc\view\viewClass as view?>
<?php $usuario = usuarioTableClass::USER ?>
<div class="container container-fluid">
<h1>EDITAR USUARIO <?php echo $objUsuario[0]->$usuario?></h1>
<?php view::includePartial('default/formUser',array('objUsuario' =>$objUsuario,'usuario'=> $usuario)); ?>
</div>