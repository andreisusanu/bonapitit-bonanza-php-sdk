<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddMultipleItemsType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class AddMultipleFixedPriceItemsRequest
{
    /**
     * @var RequesterCredentialsType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
     */
    public $requesterCredentials;

    /**
     * @var AddMultipleItemsType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\AddMultipleItemsType")
     */
    public $items;
}