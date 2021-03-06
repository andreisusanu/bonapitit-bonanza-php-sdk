<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class NotificationEnableType
{

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $eventEnable;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $eventType;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
	public $detailed;
}