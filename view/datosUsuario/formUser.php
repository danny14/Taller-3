<?php use mvc\routing\routingClass as routing;?>
<?php use mvc\i18n\i18nClass as i18m;?>
<?php  $id = datosUsuarioTableClass::ID;?>
<?php $user_id = datosUsuarioTableClass::USUARIO_ID;?>
<?php $nombre = datosUsuarioTableClass::NOMBRE;?>
<?php $writ = datosUsuarioTableClass::CEDULA;?>
<?php $lastName = datosUsuarioTableClass::APELLIDO;?>
<form method="POST" action="<?php echo routing::getInstance()->getUrlWeb('datosUsuario',((isset($objdatosUsuario)) ? 'update' : 'create'));?>">
    <?php if(isset($objdatosUsuario)== true): ?>
    <!--<input type="hidden" name="<?php // echo datosUsuarioTableClass::getNameField(usuarioBaseTableClass::ID, true)?>" value="<?php //echo $objdatosUsuario->$id ;?>">-->
    <?php  endif;?>
    <?php echo i18m::__('user_id');?>: <input type="text" value="<?php // echo((isset($objdatosUsuario)) ? $objdatosUsuario[0]->$user_id : '') ?>" name="<?php echo datosUsuarioTableClass::getNameField(datosUsuarioTableClass::USUARIO_ID, true);?>"><br>
    <?php echo i18m::__('writ')?>:<input type="text" value="<?php echo((isset($objdatosUsuario)) ? $objdatosUsuario[0]->$writ : '') ?>" name="<?php echo datosUsuarioTableClass::getNameField(datosUsuarioTableClass::CEDULA, true) ?>"><br>
    <?php echo i18m::__('name')?>:<input type="text" value="<?php echo((isset($objdatosUsuario)) ? $objdatosUsuario[0]->$nombre : '') ?>" name="<?php echo datosUsuarioTableClass::getNameField(datosUsuarioTableClass::NOMBRE, true) ?>"><br>
    <?php echo i18m::__('last_name')?>:<input type="text" value="<?php echo((isset($objdatosUsuario)) ? $objdatosUsuario[0]->$lastName : ''); ?>" name="<?php echo datosUsuarioTableClass::getNameField(datosUsuarioTableClass::APELLIDO, true);?>"><br>
    <input type="submit" value="<?php echo i18m::__((isset($objdatosUsuario)) ? 'update' : 'register')?>">
</form>

