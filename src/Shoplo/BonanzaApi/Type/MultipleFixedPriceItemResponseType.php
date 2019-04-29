<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class MultipleFixedPriceItemResponseType extends BaseResponseType
{
    /**
     * @var FixedPriceItemResponseType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\FixedPriceItemResponseType")
     */
    public $items;
}