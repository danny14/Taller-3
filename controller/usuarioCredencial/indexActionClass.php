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
            usuarioCredencialTableClass::ID,
            usuarioCredencialTableClass::CREATED_AT,
            usuarioCredencialTableClass::UPDATED_AT,
            usuarioCredencialTableClass::USUARIO_ID,
            usuarioCredencialTableClass::CREDENCIAL_ID
            );
            $this->objusuarioCredencial = usuarioCredencialTableClass::getAll($fields, false);
            $this->defineView('index', 'usuarioCredencial', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            echo $exc->getMessage() . '<br>';
            echo $exc->getTraceAsString();
        }
    }

}

