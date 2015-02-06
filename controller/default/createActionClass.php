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
                $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $data = array(
                    usuarioTableClass::USER => $usuario,
                    usuarioTableClass::PASSWORD => md5($password)
                );
                
                usuarioTableClass::insert($data);
                routing::getInstance()->redirect('default', 'index');
            } else {
                routing::getInstance()->redirect('default', 'index');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage() . '<br>';
            echo $exc->getTraceAsString();
        }
    }

}
