<form method="POST" action="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'create')  ?>">
    <?php //echo i18n::__('id') ?>:<!--<input type="text" name="<?php // usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true) ?>" /><br>-->
        <?php echo i18n::__('credencial_id') ?>:<input type="text" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::CREDENCIAL_ID, true) ?>" /><br>
            <?php echo i18n::__('user_id') ?>:<input type="text" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) ?>" /><br>
    <input type="submit" value="<?php echo i18n::__('register') ?>" >
</form>
