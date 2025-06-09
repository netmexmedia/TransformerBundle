<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class TimestampTransformer implements TransformerInterface
{
    public function transform($data): \DateTimeInterface
    {
        return new \DateTimeImmutable("@".(int)$data);
    }

    public function reverse($data): int
    {
        return $data->getTimestamp();
    }
}