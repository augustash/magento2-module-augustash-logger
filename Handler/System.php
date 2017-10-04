<?php

namespace Augustash\Logger\Handler;

class System extends \Magento\Framework\Logger\Handler\System
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/aai_system.log';
}
