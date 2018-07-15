<?php
/**
 * Created by PhpStorm.
 * User: byron-pro
 * Date: 2018/7/15
 * Time: 17:35
 */

namespace SuperFactory\UpperFactory;

abstract class AbstractFactory
{
    public abstract function build($vehicle_type);
}