<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class CapitalizationTransformer implements TransformerInterface
{
    public function transform($data): string
    {
        return strtoupper($data);
    }

    public function reverse($data): string
    {
        return strtolower($data);
    }
}