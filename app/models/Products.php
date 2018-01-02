<?php

class Products extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $product_id;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $product_name;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=false)
     */
    public $product_price;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $product_url;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("otzivi");
        $this->setSource("products");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'products';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Products[]|Products|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Products|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
