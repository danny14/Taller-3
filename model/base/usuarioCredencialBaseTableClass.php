<?php

use mvc\model\table\tableBaseClass;

/**
 * Description of usuarioCredencialBaseTableClass
 * 
 * @author Danny Steven Ruiz Hernandez <danny_ruiz_1995@hotmail.com>
 */
class usuarioCredencialBaseTableClass extends tableBaseClass {
    
    private $id;
    private $created_at;
    private $update_at;
    private $usuario_id;
    private $credencial_id;
    
    CONST ID = 'id';
    CONST CREATED_AT = 'created_at';
    CONST UPDATED_AT = 'updated_at';
    CONST USUARIO_ID = 'usuario_id';
    CONST CREDENCIAL_ID = 'credencial_id';
    
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
    public function getUpdated_at() {
        return $this->updated_at;
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
     * @return integer
     */
    public function getCredencial_id() {
        return $this->credencial_id;
    }
    /**
     * 
     * @return integer
     */
    public function setId($id) {
        $this->id = $id;
    }
    /**
     * 
     * @return date
     */
    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }
    /**
     * 
     * @return date
     */
    public function setUpdated_at($updated_at) {
        $this->update_at = $updated_at;
    }
    /**
     * 
     * @return integer
     */
    public function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }
    /**
     * 
     * @return integer
     */
    public function setCredencial_id($credencial_id) {
        $this->credencial_id = $credencial_id;
    }

    
    /**
     * Obtiene el nombre de la tabla
     * @return string
     */
    static public function getNameTable() {
        return 'usuario_credencial';
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
    public static function getAll($fields, $deletedLogical = true, $orderBy = null, $order = null, $limit = null, $offset = null, $table = null) {
        return parent::getAll(self::getNameTable(), $fields, $deletedLogical, $orderBy, $order, $limit, $offset);
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
    public static function update($ids, $data, $table = null) {
        return parent::update($ids, $data, self::getNameTable());
    }

}
