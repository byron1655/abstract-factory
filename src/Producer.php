<?php
/**
 * Created by PhpStorm.
 * User: byron-pro
 * Date: 2018/7/15
 * Time: 17:55
 */

namespace SuperFactory;

class Producer
{
    private static $type = [
        'VEHICLE' => 'SuperFactory\UpperFactory\VehicleFactory',
    ];

    public static function getFactory($type, $vehicle_type)
    {
        $type = strtoupper($type);

        if (self::$type[$type]) {

            return call_user_func([self::$type[$type], 'build'], $vehicle_type);
        }

        return null;
    }
}