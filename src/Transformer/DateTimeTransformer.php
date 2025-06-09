<?php

namespace Netmex\TransformerBundle\Transformer;

use Netmex\TransformerBundle\Contracts\TransformerInterface;

class DateTimeTransformer implements TransformerInterface
{
    public function transform(string $data): \DateTimeInterface
    {
        return new \DateTimeImmutable($data);
    }

    public function reverse(\DateTimeInterface $data): string
    {
        return $data->format('Y-m-d H:i:s');
    }
}