<?php declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

use Siler\Functional as λ; // Just to be cool, don't use non-ASCII identifiers ;)
use Siler\Route;

Route\get('/', λ\puts('Hello, World!'));
