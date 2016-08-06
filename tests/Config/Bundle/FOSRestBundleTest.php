<?php

namespace Tests\Config\Bundle;

use FOS\RestBundle\FOSRestBundle;
use JMS\SerializerBundle\JMSSerializerBundle;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FOSRestBundleTest extends KernelTestCase
{
    public function testFOSRestBundleLoaded()
    {
        $bundle = static::$kernel->getBundle('JMSSerializerBundle');
        $this->assertInstanceOf(JMSSerializerBundle::class, $bundle);

        $bundle = static::$kernel->getBundle('FOSRestBundle');
        $this->assertInstanceOf(FOSRestBundle::class, $bundle);
    }
}
