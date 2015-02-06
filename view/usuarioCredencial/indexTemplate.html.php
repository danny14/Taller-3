<?php use mvc\routing\routingClass as routing; ?>
<?php use mvc\i18n\i18nClass as i18m; ?>

<div class="container container-fluid">
    <h1><?php echo i18m::__('data') . " " . i18m::__('user') . " " . i18m::__('credencial') ?></h1>
    <div class="row">
        <div>
            <a href="" class="btn btn-success btn-xs">Nuevo</a>
            <a href="" class="btn btn-danger btn-xs">Borrar</a>
        </div>
        <table class="table table-bordered table-responsive table-striped">
            
            <thead
                <tr>
                    <th><input type="checkbox"></th>
                    <th><?php echo i18m::__('id') ?></th>
                    <th><?php echo i18m::__('created_at') ?></th>
                    <th><?php echo i18m::__('updated_at') ?></th>
                    <th><?php echo i18m::__('user_id') ?></th>
                    <th><?php echo i18m::__('credencial_id') ?></th>
                    <th><?php echo i18m::__('action')?></th>
                </tr>
            </thead>
            <tbody>
<?php foreach ($objusuarioCredencial as $row): ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?php echo $row->id ?></td>
                        <td><?php echo $row->created_at ?></td>
                        <td><?php echo $row->updated_at ?></td>
                        <td><?php echo $row->usuario_id ?></td>
                        <td><?php echo $row->credencial_id ?></td>
                        <td>
                            <a href="#" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="#" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" onclick="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
