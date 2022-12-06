<?php


require_once __DIR__ . '/../vendor/autoload.php';

$logger = new \MinEduc\Logger\Logger();


//use Monolog\Level;
//use Monolog\Logger;
//use Monolog\Handler\StreamHandler;
//
//// create a log channel
//$logger = new Logger('name');
//$logger->pushHandler(new StreamHandler(__DIR__ . '/../app.log', Level::Debug));

function main(\Psr\Log\LoggerInterface $logger) {
    $logger->debug('On a réussi a créer $logger');
}

main($logger);

//main(new class extends \Psr\Log\AbstractLogger {
//    public function log($level, \Stringable|string $message, array $context = []): void
//    {
//
//    }
//});