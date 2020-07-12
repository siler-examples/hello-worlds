<?php declare(strict_types=1);

use Siler\Http\Response;
use Siler\Route;
use Siler\Swoole;

require_once __DIR__ . '/../vendor/autoload.php';

$handler = function () {
    Route\get('/', fn() => Response\json('Hello, World!'));
};

$port = 8000;
echo "Listening on port $port\n";
Swoole\http($handler, $port)->start();
