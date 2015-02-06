<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of indexActionClass 
 * 
 * @author Danny Steven Ruiz Hernandez
 */
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {
                    $usuario_id = request::getInstance()->getPost(datosUsuarioTableClass::getNameField(datosUsuarioTableClass::USUARIO_ID, true));
                    $cedula = request::getInstance()->getPost(datosUsuarioTableClass::getNameField(datosUsuarioTableClass::CEDULA, true)) ;
                    $nombre = request::getInstance()->getPost(datosUsuarioTableClass::getNameField(datosUsuarioTableClass::NOMBRE, true)) ;
                    $apellido = request::getInstance()->getPost(datosUsuarioTableClass::getNameField(datosUsuarioTableClass::APELLIDO, true));
                $data = array(
                    datosUsuarioTableClass::USUARIO_ID => $usuario_id,
                    datosUsuarioTableClass::CEDULA => $cedula,
                    datosUsuarioTableClass::NOMBRE => $nombre,
                    datosUsuarioTableClass::APELLIDO => $apellido
                );
                
                datosUsuarioTableClass::insert($data);
                routing::getInstance()->redirect('datosUsuario', 'index');
            } else {
                routing::getInstance()->redirect('datosUsuario', 'index');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage() . '<br>';
            echo $exc->getTraceAsString();
        }
    }

}
