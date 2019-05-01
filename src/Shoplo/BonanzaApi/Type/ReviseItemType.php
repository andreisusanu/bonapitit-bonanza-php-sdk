<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ReviseItemType
{
    /**
     * @var int
     *
     * @Serializer\Type("int")
     */
    public $itemId;

    /**
     * @var AddItemType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\AddItemType")
     */
    public $item;
}