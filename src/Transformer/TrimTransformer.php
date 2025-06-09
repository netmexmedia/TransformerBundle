<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class TrimTransformer implements TransformerInterface
{
    public function transform($data): string
    {
        return trim($data);
    }

    public function reverse($data): string
    {
        return $data;
    }
}