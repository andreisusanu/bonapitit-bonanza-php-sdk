<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class AddMultipleItemContainer
{
    /**
     * @var AddItemType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\AddItemType>")
     */
    public $item;
}