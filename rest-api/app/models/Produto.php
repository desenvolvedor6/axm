<?php

class Produto extends \Phalcon\Mvc\Model {

    /**
     *
     * @var integer
     */
    public $prod_codigo;

    /**
     *
     * @var string
     */
    public $prod_nome;

    /**
     *
     * @var integer
     */
    public $marc_codigo;

    /**
     *
     * @var string
     */
    public $prod_preco;

    /**
     *
     * @var integer
     */
    public $prod_quantidade;

    /**
     *
     * @var integer
     */
    public $usua_codigo;

    /**
     * Initialize method for model.
     */
    public function initialize() {
        $this->belongsTo('usua_codigo', 'Usuario', 'usua_codigo', array('alias' => 'Usuario'));
        $this->belongsTo('marc_codigo', 'Marca', 'marc_codigo', array('alias' => 'Marca'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Produto[]
     */
    public static function find($parameters = null) {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Produto
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
        return 'produto';
    }

}
