<!--<pre>
    <?php // print_r($objdatosUsuario); ?>
</pre>-->
<?php use mvc\routing\routingClass as routing;?>
<?php use mvc\i18n\i18nClass as i18m;?>
<?php use mvc\view\viewClass as view;?>
<?php $nombre = datosUsuarioTableClass::NOMBRE; ?>
<h1>Editar Datos Usuario <?php echo $objdatosUsuario[0]->$nombre; ?></h1>
<?php view::includePartial('datosUsuario/formUser', array('objdatosUsuario' => $objdatosUsuario));?>