<?php


namespace Shoplo\BonanzaApi\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\MultipleReviseFixedPriceItemResponseType;

class ReviseMultipleFixedPriceItemsResponse extends BaseResponse
{
    /**
     * @var MultipleReviseFixedPriceItemResponseType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\MultipleReviseFixedPriceItemResponseType")
     */
    public $reviseMultipleFixedPricesItemsResponse;
}