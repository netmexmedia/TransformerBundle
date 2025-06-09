<?php

namespace Netmex\TransformerBundle\Contracts;

/**
 * Interface TransformerInterface
 *
 * Provides methods to transform data from one representation to another,
 * and to reverse the transformation.
 */
interface TransformerInterface
{
    /**
     * Transforms the input data into a desired representation.
     *
     * @param mixed $data The input data to be transformed.
     *
     * @return mixed The transformed data.
     */
    public function transform(mixed $data): mixed;

    /**
     * Reverses the transformation, converting the transformed data back to its original form.
     *
     * @param mixed $data The transformed data to be reversed.
     *
     * @return mixed The original data before transformation.
     */
    public function reverse(mixed $data): mixed;
}
