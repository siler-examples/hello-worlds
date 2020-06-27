# Hello, Worlds!

🌐 "Hello, World!" (super simple, just minimal) examples of doing things in [Siler](https://github.com/leocavalcante/siler).

## Functional

My favorite ❤λ

`php -S localhost:8000 -t 00-functional`

```php
use Siler\Functional as λ; // Just to be cool, don't use non-ASCII identifiers ;)
use Siler\Route;

Route\get('/', λ\puts('Hello, World!'));
```

## JSON

The `Response\json` function will automatically add `Content-type: application/json` in the response headers.

`php -S localhost:8000 -t 01-json`

```php
use Siler\Route;
use Siler\Http\Response;

Route\get('/', fn() => Response\json(['message' => 'Hello, World!']));
```

## GraphQL

Install peer-dependency:

```bash
composer require webonyx/graphql-php
```

### Schema-first

```graphql
type Query {
    hello: String
}
```

```php
use Siler\Route;
use Siler\GraphQL;

$type_defs = file_get_contents(__DIR__ . '/schema.graphql');
$resolvers = [
    'Query' => [
        'hello' => fn ($root, $args, $context, $info) => 'Hello, World!'
    ]
];

$schema = GraphQL\schema($type_defs, $resolvers);

Route\post('/graphql', fn() => GraphQL\init($schema));
```

```graphql
query {
  hello
}
```

```json
{
  "data": {
    "hello": "Hello, World!"
  }
}
```
