<?php
/**
 * Created by PhpStorm.
 * User: byron-pro
 * Date: 2018/7/15
 * Time: 18:06
 */
require __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FamilyCarTest extends TestCase
{
    public function testCar()
    {
        $vehicle = \SuperFactory\Producer::getFactory('vehicle','familycar');
        //var_dump($vehicle);
    }
}