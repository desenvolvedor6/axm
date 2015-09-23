<?php

class Marca extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $marc_codigo;

    /**
     *
     * @var string
     */
    public $marc_nome;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('marc_codigo', 'Produto', 'marc_codigo', array('alias' => 'Produto'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Marca[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Marca
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'marca';
    }

}
