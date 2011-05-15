<?php
class OrderItem extends Zend_Db_Table_Abstract
{
    /**
    * The default table name
    */
    protected $_name = 'order_item';

    /**
    * Reference map
    */
    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'Order',
            'refColumns' => 'order_id',
            'columns' => 'order_id',
        ),
        array(
            'refTableClass' => 'Product',
            'refColumns' => 'product_id',
            'columns' => 'product_id',
        )
    );
}