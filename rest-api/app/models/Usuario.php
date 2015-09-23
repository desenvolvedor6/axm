<?php

class Usuario extends \Phalcon\Mvc\Model {

    /**
     *
     * @var integer
     */
    public $usua_codigo;

    /**
     *
     * @var string
     */
    public $usua_nome;

    /**
     *
     * @var string
     */
    public $usua_email;

    /**
     *
     * @var string
     */
    public $usua_senha;

    /**
     *
     * @var integer
     */
    public $usua_habilitado;

    /**
     * Initialize method for model.
     */
    public function initialize() {
        $this->hasMany('usua_codigo', 'Produto', 'usua_codigo', array('alias' => 'Produto'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario[]
     */
    public static function find($parameters = null) {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario
     */
    public static function findFirst($parameters = null) {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource() {
        return 'usuario';
    }

}
