<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\MultipleFixedPriceItemsResponseType;

class AddMultipleFixedPriceItemsResponse
{
//    /**
//     * @var \DateTime
//     *
//     * @Serializer\Type("DateTime<Y-m-d\TH:i:s.u\Z>")
//     */
//    public $timestamp;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $version;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $ack;

    /**
     * @var MultipleFixedPriceItemsResponseType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\MultipleFixedPriceItemsResponseType")
     */
    public $addMultipleFixedPriceItemsResponse;
}