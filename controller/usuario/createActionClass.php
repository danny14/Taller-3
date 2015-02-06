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
                $user = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));
                $password = md5(request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true)));
                if (strlen($user)> usuarioTableClass::USER_LENGTH) {
                    throw new PDOException(i18n::__(00004,null,array('errors',':longitud'=> usuarioTableClass::USER_LENGTH)),00004);
                }
                $data = array(
                usuarioTableClass::USER => $user ,
                usuarioTableClass::PASSWORD => $password
                );
                usuarioTableClass::insert($data);
                routing::getInstance()->redirect('usuario', 'index');
            }else{
                routing::getInstance()->redirect('usuario', 'index');
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage() . "<br>";
            echo $exc->getTraceAsString();
        }
    }

}
