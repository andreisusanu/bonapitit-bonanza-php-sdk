<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\FixedPriceItemResponseType;

class AddMultipleFixedPriceItemsResponse extends BaseResponse
{
    /**
     * @var FixedPriceItemResponseType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\FixedPriceItemResponseType")
     */
    public $addFixedPriceItemResponses; // TODO: check this!
}