<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class BooleanTransformer implements TransformerInterface
{
    public function transform(mixed $data): bool
    {
        return filter_var($data, FILTER_VALIDATE_BOOLEAN);
    }

    public function reverse(bool $data): string
    {
        return $data ? 'true' : 'false';
    }
}
