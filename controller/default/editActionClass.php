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
class editActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->hasRequest(usuarioTableClass::ID)) {
                $fields = array(
                usuarioTableClass::ID,
                usuarioTableClass::USER,
                usuarioTableClass::PASSWORD
                );
                $where = array(
                usuarioTableClass::ID => request::getInstance()->hasRequest(usuarioTableClass::ID)
                );
                $this->objUsuario = usuarioTableClass::getAll($fields, true, NULL, NULL, NULL, NULL, $where, NULL);
                $this->defineView('edit', 'default', session::getInstance()->getFormatOutput());
            } else {
                routing::getInstance()->redirect('default', 'index');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage() . '<br>';
            echo $exc->getTraceAsString();
        }
    }

}
