<?php

namespace App\Test\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    public function testIndexGet()
    {
        $client = static::createClient();
        $start = 2;
        $end = 3;

        $client->request('GET', '/' . $start . '/' . $end);

        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());

        $response = json_decode($client->getResponse()->getContent());

        foreach($response as $r) {
            $this->assertEquals($r->toString, $r->number);
        }
    }

}