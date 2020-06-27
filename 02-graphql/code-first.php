<?php declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Query.php';

use Siler\GraphQL;
use Siler\Route;

$schema = GraphQL\annotated([Query::class]);

Route\post('/graphql', fn() => GraphQL\init($schema));
