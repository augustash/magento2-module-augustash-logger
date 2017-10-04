<?php

namespace Augustash\Logger\Handler;

class Debug extends \Magento\Framework\Logger\Handler\Debug
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/aai_debug.log';
}
