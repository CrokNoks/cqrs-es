<?php

/*
 * This file is part of the broadway/broadway-demo package.
 *
 * (c) Qandidate.com <opensource@qandidate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command;

use App\Basket\BasketId;

abstract class BasketCommand
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
}
