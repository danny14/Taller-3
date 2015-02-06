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
class updateActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {
                $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));
                $user = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                
                $ids = array(
                usuarioTableClass::ID => $id
                );
               
                $data = array(
                usuarioTableClass::USER => $user,
                usuarioTableClass::PASSWORD => $password
                );
                usuarioTableClass::update($ids, $data);
                routing::getInstance()->redirect('usuario','index');
            }else{
                routing::getInstance()->redirect('usuario', 'index');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage() . "<br>";
            echo $exc->getTraceAsString();
        }
    }

}
