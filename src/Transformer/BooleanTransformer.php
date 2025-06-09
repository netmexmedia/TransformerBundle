<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class BooleanTransformer implements TransformerInterface
{
    public function transform($data): bool
    {
        return filter_var($data, FILTER_VALIDATE_BOOLEAN);
    }

    public function reverse($data): string
    {
        return $data ? 'true' : 'false';
    }
}
