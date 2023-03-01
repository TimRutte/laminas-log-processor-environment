<?php

namespace TimRutte\Laminas\Log\Processor;

use Laminas\Log\Processor\ProcessorInterface;

class Environment implements ProcessorInterface
{
    public function process(array $event) :array
    {
        if (!isset($event['environment']) && defined('APPLICATION_ENV')) {
            $event['environment'] = APPLICATION_ENV;
        }

        return $event;
    }
}