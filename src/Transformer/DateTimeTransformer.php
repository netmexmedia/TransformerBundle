<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class DateTimeTransformer implements TransformerInterface
{
    public function transform($data): \DateTimeInterface
    {
        return new \DateTimeImmutable($data);
    }

    public function reverse($data): string
    {
        return $data->format('Y-m-d H:i:s');
    }
}