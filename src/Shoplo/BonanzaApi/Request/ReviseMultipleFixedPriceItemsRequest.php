<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\ReviseMultipleItemsType;

class ReviseMultipleFixedPriceItemsRequest extends SecureRequest
{
    /**
     * @var ReviseMultipleItemsType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\ReviseMultipleItemsType")
     */
    public $items;
}