<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by impress-org on 19-February-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Symfony\Component\HttpFoundation\File\Exception;

class UnexpectedTypeException extends FileException
{
    public function __construct($value, $expectedType)
    {
        parent::__construct(sprintf('Expected argument of type %s, %s given', $expectedType, \is_object($value) ? \get_class($value) : \gettype($value)));
    }
}
