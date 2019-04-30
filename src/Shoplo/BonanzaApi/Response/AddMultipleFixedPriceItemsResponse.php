<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\FixedPriceItemResponseType;

class AddMultipleFixedPriceItemsResponse extends BaseResponse
{
    /**
     * @var FixedPriceItemResponseType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\FixedPriceItemResponseType>")
     */
    public $addMultipleFixedPriceItemsResponse;
}