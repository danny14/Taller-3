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
                $ids = array(
                    
                );
                datosUsuarioTableClass::update($ids, $data);
            }
                routing::getInstance()->redirect('datosUsuario', 'index');
      
//            if (request::getInstance()->hasRequest(datosUsuarioTableClass::ID)) {
//                $fields = array(
//                datosUsuarioTableClass::ID,
//                datosUsuarioTableClass::CEDULA,
//                datosUsuarioTableClass::NOMBRE,
//                datosUsuarioTableClass::APELLIDO
//                );
//                $where = array(
//                datosUsuarioTableClass::ID => request::getInstance()->getRequest(datosUsuarioTableClass::ID)
//                );
//                $this->objdatosUsuario = datosUsuarioTableClass::getAll($fields,TRUE,NULL, NULL, NULL, NULL,$where);
//                $this->defineView('edit', 'datosUsuario', session::getInstance()->getFormatOutput());
//            }else{
//                routing::getInstance()->redirect('datosUsuario', 'index');
//            }
//            
        } catch (PDOException $exc) {
            echo $exc->getMessage() . '<br>';
            echo $exc->getTraceAsString();
        }
    }

}
