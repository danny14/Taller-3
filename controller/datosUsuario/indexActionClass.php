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

class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            $fields = array(
            datosUsuarioTableClass::ID,
            datosUsuarioTableClass::USUARIO_ID,
            datosUsuarioTableClass::CEDULA,
            datosUsuarioTableClass::NOMBRE,
            datosUsuarioTableClass::APELLIDO         
            );
            $this->objdatosUsuario = datosUsuarioTableClass::getAll($fields, false);
            $this->defineView('index', 'datosUsuario', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            echo $exc->getMessage() . '<br>';
            echo $exc->getTraceAsString();
        }
    }

}

