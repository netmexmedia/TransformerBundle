<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class SlugTransformer implements TransformerInterface
{
    public function transform($data): string
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $data);
        $slug = trim($slug, '-');
        return strtolower($slug);
    }

    public function reverse($data): string
    {
        return str_replace('-', ' ', $data);
    }
}