<?php declare(strict_types=1);

/**
 * @\Siler\GraphQL\Annotation\ObjectType()
 */
final class Query
{
    /**
     * @\Siler\GraphQL\Annotation\Field()
     */
    static public function hello($root, $args, $context, $info): string
    {
        return 'Hello, World!';
    }
}
