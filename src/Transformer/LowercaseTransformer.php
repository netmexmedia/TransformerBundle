<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class LowercaseTransformer implements TransformerInterface
{
    public function transform(string $data): string
    {
        return strtolower($data);
    }

    public function reverse(string $data): string
    {
        return strtoupper($data);
    }
}