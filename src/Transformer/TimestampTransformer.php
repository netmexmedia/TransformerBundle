<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class TimestampTransformer implements TransformerInterface
{
    public function transform(string|int $data): \DateTimeInterface
    {
        return (new \DateTimeImmutable())->setTimestamp((int)$data);
    }

    public function reverse(\DateTimeInterface $data): int
    {
        return $data->getTimestamp();
    }
}