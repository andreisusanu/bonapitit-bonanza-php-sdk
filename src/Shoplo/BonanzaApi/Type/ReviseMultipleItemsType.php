<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ReviseMultipleItemsType
{
    /**
     * @var ReviseItemType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ReviseItemType>")
     */
    public $items;
}