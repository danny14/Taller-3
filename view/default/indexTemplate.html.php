<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php $usu = usuarioTableClass::USER; ?>
<?php $id = usuarioTableClass::ID; ?>

<div class="container container-fluid">
    <h1><?php echo i18n::__('user')?></h1>
    <div class="row">
        <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('default', 'deleteSelect') ?>" method="POST">
            <div>
                <a href="<?php echo routing::getInstance()->getUrlWeb('default', 'insert') ?>" class="btn btn-success btn-xs">Nuevo</a>
                <a href="#" class="btn btn-danger btn-xs" onclick="borrarSeleccion">Borrar</a>
            </div>
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                    <tr>

                        <th><input type="checkbox" id="chkAll"></th>
                        <th><?php echo i18n::__('user') ?></th>
                        <th><?php echo i18n::__('action') ?></th>
                    </tr>
                </thead>
                <tbody>
<?php foreach ($objUsuario as $usuario): ?>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                            <td><?php echo $usuario->$usu?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('default', 'edit', array(usuarioTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id; ?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
<?php endforeach; ?>   
                </tbody>
            </table>
        </form>
        <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('default', 'delete') ?>" method="POST">
            <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
        </form>
    </div>
</div>

