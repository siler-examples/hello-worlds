<?php declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

use Siler\Http\Response;
use Siler\Route;

Route\get('/', fn() => Response\json(['message' => 'Hello, World!']));
