<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddMultipleItemsType;

class AddMultipleFixedPriceItemsRequest extends SecureRequest
{
    /**
     * @var AddMultipleItemsType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\AddMultipleItemsType")
     */
    public $items;
}