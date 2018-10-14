<?php

/*
 * This file is part of the broadway/broadway-demo package.
 *
 * (c) Qandidate.com <opensource@qandidate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Broadway\ReadModel\Repository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ShowBasketController
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $basketId
     */
    public function getBasketAction(Request $request, $basketId)
    {
        $readModel = $this->repository->find($basketId);
        var_dump($this->repository); die();
        var_dump($readModel); die();

        if (null === $readModel) {
            return new Response('', Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($readModel->serialize());
    }
}
