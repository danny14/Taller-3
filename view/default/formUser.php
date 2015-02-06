<?php use mvc\routing\routingClass as routing; ?>
<?php use mvc\i18n\i18nClass as i18m; ?>
<?php $idUsuario = usuarioTableClass::ID ?>
<?php $password = usuarioTableClass::PASSWORD ?>
<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12">
        <form method="POST" action="<?php echo routing::getInstance()->getUrlWeb('default', ((isset($objUsuario)) ? 'update' : 'create')) ?>">
                <?php if (isset($objUsuario) == TRUE): ?>
            <pre>
            <?php  print_r($objUsuario) ;?>
            </pre>
                <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" value="<?php echo $objUsuario[0]->$idUsuario; ?>" type="hidden">
            <?php endif ?>
            <div class="form-group">
<?php echo i18m::__('user'); ?>: <input class="form-control" value="<?php echo ((isset($objUsuario) == TRUE) ? $objUsuario[0]->$usuario : '') ?>" type="text" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>"><br>
            </div>
<?php echo i18m::__('pass') ?>:<input class="form-control" value="<?php echo ((isset($objUsuario) == TRUE) ? $objUsuario[0]->$password : '') ?>" type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>"><br>
<input class="btn btn-success btn-xs" type="submit" value="<?php echo i18m::__((isset($objUsuario)) ? 'update' : 'register') ?>">
        </form>
        </div>
    </div>
</div>