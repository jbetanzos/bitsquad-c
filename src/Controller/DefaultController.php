<?php

namespace App\Controller;

use App\Model\Multiple;
use App\Service\ChainOperation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    public function index(ChainOperation $chain, Request $request)
    {
        $start = intval($request->get("start"));
        $end = intval($request->get("end"));

        $multiples = new \SplQueue();
        $multiples->enqueue(new Multiple(3, "Multipli"));
        $multiples->enqueue(new Multiple(5, "IT"));
        $response = array();

        for ($i = $start; $i < $end; $i++) {
            $chain->setNumber($i);
            $response[] = array(
                "number" => $i,
                "toString" => $chain->validate($multiples, "Multiplianos")
            );
        }

        return new JsonResponse($response);
    }
}