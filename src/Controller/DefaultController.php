<?php

namespace App\Controller;

use App\Model\ChainOperation;
use App\Model\Multiple;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    public function index()
    {
        $multiples = new \SplQueue();
        $multiples->enqueue(new Multiple(3, "Multipli"));
        $multiples->enqueue(new Multiple(5, "IT"));
        $response = array();

        for ($i = 1; $i < 101; $i++) {
            $chain = new ChainOperation($i);
            $response[] = array(
                "number" => $i,
                "toString" => $chain->validate($multiples, "Multiplianos")
            );
        }

        return new JsonResponse($response);
    }
}