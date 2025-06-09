<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class JsonTransformer implements TransformerInterface
{
    public function transform($data): mixed
    {
        return json_decode($data, true);
    }

    public function reverse($data): string
    {
        return json_encode($data);
    }
}
