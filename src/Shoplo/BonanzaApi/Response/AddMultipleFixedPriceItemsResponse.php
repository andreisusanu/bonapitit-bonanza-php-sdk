<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\MultipleFixedPriceItemsResponseType;

class AddMultipleFixedPriceItemsResponse extends BaseResponse
{
    /**
     * @var MultipleFixedPriceItemsResponseType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\MultipleFixedPriceItemsResponseType")
     */
    public $addMultipleFixedPriceItemsResponse;
}