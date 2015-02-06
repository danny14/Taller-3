<?php

use mvc\model\table\tableBaseClass;

/**
 * Description of datosUsuarioBaseTableClass
 * @author Danny Steven Ruiz Hernandez <danny_ruiz_1995@hotmail.com>
 */
class datosUsuarioBaseTableClass extends tableBaseClass {
    
    private $id;
    private $created_at;
    private $update_at;
    private $deleted_at;
    private $usuario_id;
    private $cedula;
    private $nombre;
    private $apellido;
    
    CONST ID = 'id';
    CONST CREATED_AT = 'created_at';
    CONST UPDATED_AT = 'updated_at';
    CONST DELETED_AT = 'deleted_at';
    CONST USUARIO_ID = 'usuario_id';
    CONST CEDULA = 'cedula';
    CONST CEDULA_LENGTH = 11;
    CONST NOMBRE = 'nombre';
    CONST NOMBRE_LENGTH = 80;
    CONST APELLIDO = 'apellido';
    CONST APELLIDO_LENGTH = 80;

/**
 * 
 * @return integer
 */
    public function getId() {
        return $this->id;
    }
/**
 * 
 * @return date
 */
    public function getCreated_at() {
        return $this->created_at;
    }
/**
 * 
 * @return date
 */
    public function getUpdate_at() {
        return $this->update_at;
    }
/**
 * 
 * @return date
 */
    public function getDeleted_at() {
        return $this->deleted_at;
    }
/**
 * 
 * @return integer
 */
    public function getUsuario_id() {
        return $this->usuario_id;
    }
/**
 * 
 * @return string
 */
    public function getCedula() {
        return $this->cedula;
    }
/**
 * 
 * @return string
 */
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdate_at($update_at) {
        $this->update_at = $update_at;
    }

    public function setDeleted_at($deleted_at) {
        $this->deleted_at = $deleted_at;
    }

    public function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

        /**
     * obtiene el nombre de la tabla
     * @return string 
     */
    static public function getNameTable() {
        return 'datos_usuario';
    }

    /**
     * Metodo para obtener el nombre del campo mas la tabla ya sea en formato
     * DB (.) o en formato html (_)
     * 
     * @param strin $field Nombre del campo
     * @param string $html [opcional] por defecto traera el nombre del campo en
     * version DB
     * @return string 
     */
    public static function getNameField($field, $html = false, $table = null) {
        return parent::getNameField($field, self::getNameTable(), $html);
    }

    /**
     * Metodo para borrar un registro de una tabla x en la base de datos
     * 
     * @param array $ids array con los campos por posiciones
     * asociativas y los valores por valores a tener en cuenta para el borrado.
     * Ejemplo $fieldsAndValues['id'] = 1
     * @param boolean $deletedLogical [opcional] Borrado logico o 
     * borrado fisico [por defecto] de un registro en una tabla de la base de datos
     * @return \PDOException|boolean
     */
    public static function delete($ids, $deletedLogical = false, $table = null) {
        return parent::delete(self::getNameTable(), $ids, $deletedLogical);
    }

    /**
     * Metodo para insertar en una tabla usuario
     * 
     * @param array $data Array asociativo donde las claves son los nombres de
     * los campos y su valor seria el valor a insertar. Ejemplo:
     * $data['nombre'] = 'Bayron'; $data['apellido'] = 'Galindo';
     * @return \PDOException|boolean
     */
    public static function insert($data, $table = null) {
        return parent::insert(self::getNameTable(), $data);
    }

    /**
     * Metodo para leer todos los registros de una tabla
     * 
     * @param array $fields Array con los nombres de los campos a solicitar
     * @param boolean $deletedLogical [opcional] indicacion de borrado logico
     * o borrado fisico
     * @param array $orderBy [optional] Array con el o los nombre de los campos 
     * por los cuales se ordenara la consulta
     * @param string $order [optional] forma de ordenar la consulta
     * (por defecto null), puede ser ASC o DESC
     * @param integer $limit [optional] cantidad de resultados a mostrar
     * @param integer $offSet [optional] pagina solicitada sobre
     *  la cantidad de datos a mostrar
     * @return mixed una instancia de una clase estandar,la cual tendra como
     * variables publicas los nombres de las columnas de la consulta o una
     * instancia de \PDOException en caso de fracaso.
     */
    public static function getAll($fields, $deletedLogical = true, $orderBy = null, $order = null, $limit = null, $offset = null,$where = null, $table = null) {
        return parent::getAll(self::getNameTable(), $fields, $deletedLogical, $orderBy, $order, $limit, $offset,$where);
    }

    /**
     * Metodo para actaulizar un registro en una tabla de una base de datos
     * 
     * @param array $ids Array asociativo con las posiciones por nombre de los
     * campos y los valores son quienes serian las llaves a buscar.
     * @param array $data Array asociativo con los datos a modificar.
     * las posiciones por nombres de las columnas con los valores por los nuevos datos a escribir
     * @return  \PDOException|boolean
     */
    public static function update($ids,$data, $table = null) {
        return parent::update($ids, $data, self::getNameTable());
    }

}
