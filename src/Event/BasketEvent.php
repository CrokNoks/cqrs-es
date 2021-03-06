<?php

/*
 * This file is part of the broadway/broadway-demo package.
 *
 * (c) Qandidate.com <opensource@qandidate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Event;

use App\Basket\BasketId;
use Broadway\Serializer\Serializable;

abstract class BasketEvent implements Serializable
{
    private $basketId;

    public function __construct(BasketId $basketId)
    {
        $this->basketId = $basketId;
    }

    /**
     * @return BasketId
     */
    public function getBasketId()
    {
        return $this->basketId;
    }

    /**
     * {@inheritDoc}
     */
    public function serialize() : array
    {
        return array('basketId' => (string) $this->basketId);
    }
}
