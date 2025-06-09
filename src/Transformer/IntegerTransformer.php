<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class IntegerTransformer implements TransformerInterface
{
    public function transform(mixed $data): int
    {
        return (int) $data;
    }

    public function reverse(int $data): string
    {
        return (string) $data;
    }
}