<?php use mvc\routing\routingClass as routing ?>
<?php use mvc\i18n\i18nClass as i18n ?>
<?php $usu = usuarioTableClass::USER; ?>
<?php $id = usuarioTableClass::ID; ?>
<?php $created_at = usuarioTableClass::CREATED_AT; ?>
<div class="container container-fluid">
    <h1>USUARIO</h1>
    <div class="row">
        <form id="frmDeleteAll" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteSelect')?>" method="POST">
        <div>
            <a class="btn btn-success btn-xs" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'insert')?>"> Nuevo</a>
            <a class="btn btn-danger btn-xs" href="" onclick="borrarSeleccion()"> Borrar</a>
        </div>
    
        <table class="table table-bordered table-responsive table-striped table-condensed">
            <thead>
                <tr>
                    <th><input type="checkbox" id="chkAll"></th>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>CREADO EN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
<?php foreach ($objUsuario as $usuario): ?>
                    <tr>
                        <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"</td>
                        <td><?php echo $usuario->$id ?></td>
                        <td><?php echo $usuario->$usu ?></td>
                        <td><?php echo $usuario->$created_at ?></td>
                        <td>
                            <a href="" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open">ver</i></a>
                            <a href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'edit', array(usuarioTableClass::ID =>$usuario->$id))?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit">editar</i></a>
                            <a href="" onclick="confirmarEliminar(<?php echo $usuario->$id?>)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">eliminar</i></a>
                        </td>
                    </tr>
<?php endforeach; ?>
            </tbody>
            <tfoot></tfoot>
        </table>
    </form>
    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'delete')?>" method="POST">
        <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true)?>">
    </form>
    </div>
</div>
