<?php use mvc\routing\routingClass as routing; ?>
<?php use mvc\i18n\i18nClass as i18n; ?>
<?php $password = usuarioTableClass::PASSWORD?>
<?php $id = usuarioTableClass::ID ?>
<div class="container container-fluid">
    <div class="row">
        <form method="POST" action="<?php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuario))? 'update' : 'create'))?>" >
            <?php if(isset($objUsuario) == true) :?>
            <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID,true)?>" value="<?php echo $objUsuario[0]->$id?>" type="hidden">
            <?php endif;?>
            <div class="form-group">
               <?php echo i18n::__('user')?> <input class="form-control" type="text" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" value="<?php echo ((isset($objUsuario)) ? $objUsuario[0]->$user : '')?>" ><br>
                <?php echo i18n::__('pass')?><input class="form-control" type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true)?>" value="<?php echo ((isset($objUsuario))? $objUsuario[0]->$password : '')?>"><br>
                <input class="btn btn-success btn-xs"type="submit" value="<?php echo i18n::__(((isset($objUsuario))?'update': 'register'))?>">
            </div>
        </form>
    </div>
</div>