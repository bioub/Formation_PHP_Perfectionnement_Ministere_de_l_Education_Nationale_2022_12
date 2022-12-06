<?php

namespace MinEduc\Logger;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class Logger implements LoggerInterface
{
    use LoggerTrait;

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $fic = fopen(__DIR__ . '/../../app.log', 'a');
        $now = date('Y-m-d H:i:s');
        fwrite($fic, "[$now] - $level - $message\n");
        fclose($fic);
    }
}