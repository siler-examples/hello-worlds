# Hello, Worlds!

🌐 "Hello, World!" (super simple, just minimal) examples of doing things in Siler.

## Functional

My favorite ❤λ

`php -S localhost:8000 -t 00-functional`

```php
use Siler\Functional as λ; // Just to be cool, don't use non-ASCII identifiers ;)
use Siler\Route;

Route\get('/', λ\puts('Hello, World!'));
```
