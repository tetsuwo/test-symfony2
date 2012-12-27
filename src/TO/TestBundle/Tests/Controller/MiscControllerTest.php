<?php

namespace TO\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/to/hello/Fabien');

        $this->assertTrue(
            $crawler->filter('html:contains("Hello Fabien")')
                    ->count() > 0);
    }
}
