<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class NullableTransformer implements TransformerInterface
{
    private TransformerInterface $innerTransformer;

    public function __construct(TransformerInterface $innerTransformer)
    {
        $this->innerTransformer = $innerTransformer;
    }

    public function transform(mixed $data): mixed
    {
        if ($data === null) {
            return null;
        }
        return $this->innerTransformer->transform($data);
    }

    public function reverse(mixed $data): mixed
    {
        if ($data === null) {
            return null;
        }
        return $this->innerTransformer->reverse($data);
    }
}