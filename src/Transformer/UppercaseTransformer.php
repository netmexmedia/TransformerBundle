<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class UppercaseTransformer implements TransformerInterface
{
    public function transform(string $data): string
    {
        return strtoupper($data);
    }

    public function reverse(string $data): string
    {
        return strtolower($data);
    }
}