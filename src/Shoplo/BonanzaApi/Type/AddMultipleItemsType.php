<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class AddMultipleItemsType
{
    /**
     * @var AddMultipleItemContainer
     *
     * @Serializer\Type("<Shoplo\BonanzaApi\Type\AddMultipleItemContainer>")
     */
    public $item;
}