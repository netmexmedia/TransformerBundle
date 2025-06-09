<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class LowercaseTransformer implements TransformerInterface
{
    public function transform($data): string
    {
        return strtolower($data);
    }

    public function reverse($data): string
    {
        return strtoupper($data);
    }
}