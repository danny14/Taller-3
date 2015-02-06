<?php use mvc\routing\routingClass as routing;?>
<?php use mvc\i18n\i18nClass as i18m;?>
<?php $id = datosUsuarioTableClass::ID;?>
<?php $nom = datosUsuarioTableClass::NOMBRE;?>
<div class="container container-fluid">
        <h1><?php echo i18m::__('data')." ".i18m::__('user')?></h1>
        <div class="row">
    <table class="table table-bordered table-responsive table-striped" >
    
    <div>
        <a href="#" class="btn btn-success btn-xs">Nuevo</a>
        <a href="#" class="btn btn-danger btn-xs">Borrar</a>
    </div>
        <thead>
    <tr>
        <th><input type="checkbox" class="checkbox" id="chkAll"></th>
        <th><?php echo i18m::__('id')?></th>
        <th><?php echo i18m::__('user_id')?></th>
        <th><?php echo i18m::__('writ')?></th>
        <th><?php echo i18m::__('name')?></th>
        <th><?php echo i18m::__('last_name')?></th>
        <th><?php echo i18m::__('action')?></th>
    </tr>
        </thead>
        <tbody>
    <?php foreach ($objdatosUsuario as $row): ?>
    <tr>
        <td><input type="checkbox" class="checkbox " name="chk[]"></td>
        <td><?php echo $row->id?></td>
        <td><?php echo $row->usuario_id?></td>
        <td><?php echo $row->cedula?></td>
        <td><?php echo $row->nombre?></td>
        <td><?php echo $row->apellido?></td>
        <td>
            <a href="#" class="btn btn-warning btn-xs" ><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="<?php echo routing::getInstance()->getUrlWeb('datosUsuario', 'edit', array(datosUsuarioTableClass::ID => $row -> $id))?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
        </tbody>
</table>
    </div>
    </div>
