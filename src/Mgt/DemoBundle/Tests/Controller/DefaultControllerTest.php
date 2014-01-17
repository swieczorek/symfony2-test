<?php

namespace Mgt\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/stefan');

        $this->assertTrue($crawler->filter('html:contains("Hello stefan")')->count() > 0);
    }
}
