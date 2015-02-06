<?php //
//
//use mvc\interfaces\controllerInterface;
//use mvc\controller\controllerClass;
//use mvc\config\configClass as config; // tener acceso a todas las variables de configuracion
//use mvc\request\requestClass as request; // tener acceso a todas las variables y cosas que suceden del navegador le pregunta al servidor get post y otras variables
//use mvc\routing\routingClass as routing; // tener acceso a todo lo referente con la creacion de las rutas 
//use mvc\session\sessionClass as session; // manejar todo a variables de sesion
//use mvc\i18n\i18nClass as i18n; // diccionario maneja la traduccion del sistema
//
///**
// * Description of defaultClass
// * 
// * @author Danny Steven ruiz hernandez <danny_ruiz_1995@hotmail.com>
// */
//
//class defaultClass extends controllerClass implements controllerInterface {
//
//    public function indexAction() {
//        $this->mensage = "hola";
//        $this->defineView('index', 'default', session::getInstance()->getFormatOutput());
//    }
//    public function insertUsuarioAction(){
//        try {
//            if (request::getInstance()->isMethod('POST')) {
//                $data = array(
//                usuarioTableClass::USUARIO => request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USUARIO,true)),
//                    usuarioTableClass::PASSWORD => md5(request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD,true)))
//                );
//                usuarioTableClass::insert($data);
//                routing::getInstance()->redirect('default','index');
//            } else {
//                routing::getInstance()->redirect('default', 'index');
//            }
//        } catch (PDOException $exc) {
//            echo $exc->getMessage() . "<BR>";
//            echo $exc->getTraceAsString();
//        }
////        $this->variable = "este es otro ejemplo";
////         $this->defineView('insertUsuario', 'default', session::getInstance()->getFormatOutput());
//    }
//    public function insertUsuario(){
//        //$this->defineView('insertUsuario', 'default', session::getInstance()->getFormatOutput());
//    }
//}
