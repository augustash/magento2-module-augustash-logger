<?php

namespace Augustash\Logger\Helper;

use Augustash\Logger\Logger as AshLogger;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $logger;

    public function __construct(AshLogger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Log messages to var/log/aai_system.log
     *
     * @param  string $message
     * @param  array  $extra
     * @return void
     */
    public function info($message, $extra = array())
    {
        $this->logger->info($message, $extra);
    }

    /**
     * Log messages to var/log/aai_debug.log
     *
     * @param  string $message
     * @param  array  $extra
     * @return void
     */
    public function debug($message, $extra = array())
    {
        $this->logger->debug($message, $extra);
    }

    /**
     * Wrapper method in case anyone assumes there's a log method
     *
     * @param  string $message
     * @param  array  $extra
     * @param  string $level        # i.e., 'info' or 'debug'
     * @return void
     */
    public function log($message, $extra = array(), $level = 'info')
    {
        switch (strtolower($level)) {
            case 'debug':
                $this->debug($message, $extra);
                break;

            case 'info':
            default:
                $this->info($message, $extra);
                break;
        }
    }
}
