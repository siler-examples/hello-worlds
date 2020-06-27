<?php declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

use Siler\GraphQL;
use Siler\Route;

$type_defs = file_get_contents(__DIR__ . '/schema.graphql');
$resolvers = [
    'Query' => [
        'hello' => fn($root, $args, $context, $info) => 'Hello, World!'
    ]
];

$schema = GraphQL\schema($type_defs, $resolvers);

Route\post('/graphql', fn() => GraphQL\init($schema));
