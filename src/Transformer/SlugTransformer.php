<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class SlugTransformer implements TransformerInterface
{
    public function transform(string $data): string
    {
        // Simple slugify example
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data)));
    }

    public function reverse(string $data): string
    {
        return str_replace('-', ' ', $data);
    }
}