<?php
/**
 * Created by PhpStorm.
 * User: byron-pro
 * Date: 2018/7/15
 * Time: 17:50
 */

namespace SuperFactory\LowerFactory;

class FamilyCar implements Car
{
    public function build()
    {
        print 'It is a FamilyCar';
    }
}