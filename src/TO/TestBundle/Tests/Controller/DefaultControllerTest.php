<?php

namespace TO\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MiscControllerTest extends WebTestCase
{
    public function testルーティング名が取得できている()
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/to/misc/get_routing_name');

        $this->assertTrue(
            $crawler->filter('#controller')
                    ->text() === 'misc_get_routing_name');

        $this->assertTrue(
            $crawler->filter('#twig')
                    ->text() === 'misc_get_routing_name');
    }

    public function testプレーンテキストを返している()
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/to/misc/return_plain_text');

        $this->assertTrue(
            $client->getResponse()->headers
                   ->contains('Content-Type', 'plain/text'));

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertEquals('PLAIN-TEXT', $client->getResponse()->getContent());
    }
}
