<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class MultipleReviseFixedPriceItemResponseType extends BaseResponseType
{
    /**
     * @var FixedPriceItemResponseType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\FixedPriceItemResponseType>")
     */
    public $items;
}