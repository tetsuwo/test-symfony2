<?php

namespace TO\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MiscControllerTest extends WebTestCase
{
    public function testGet_routing_name()
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/to/misc/get_routing_name');

        $this->assertTrue(
            $crawler->filter('html:contains("misc_get_routing_name")')
                    ->count() === 2);
    }

    public function testReturn_plain_text()
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/to/misc/return_plain_text');

        $this->assertTrue(
            $client->getResponse()->headers
                   ->contains('Content-Type', 'plain/text'));

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertEquals('plain-text', $client->getResponse()->getContent());
    }
}
