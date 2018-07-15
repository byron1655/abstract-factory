<?php
/**
 * Created by PhpStorm.
 * User: byron-pro
 * Date: 2018/7/15
 * Time: 17:39
 */

namespace SuperFactory\UpperFactory;

class VehicleFactory extends AbstractFactory
{

    const VEHICLE_TYPE = [
        'FAMILYCAR' => 'SuperFactory\LowerFactory\FamilyCar',
    ];

    public function __construct()
    {
    }

    public function build($vehicle_type)
    {
        $vehicle_type = strtoupper($vehicle_type);

        if (self::VEHICLE_TYPE[$vehicle_type]) {
            return call_user_func([self::VEHICLE_TYPE[$vehicle_type], 'build']);
        }

        return null;
    }
}