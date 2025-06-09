<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class TrimTransformer implements TransformerInterface
{
    public function transform(string $data): string
    {
        return trim($data);
    }

    public function reverse(string $data): string
    {
        return $data;
    }
}