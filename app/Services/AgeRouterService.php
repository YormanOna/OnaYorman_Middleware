<?php

namespace App\Services;

class AgeRouterService
{
    protected static array $map = [
        [0, 5, '/bebes'],
        [6, 12, '/ninos'],
        [13, 17, '/adolescentes'],
        [18, 25, '/jovenes'],
        [26, 59, '/adultos'],
        [60, 74, '/mayores'],
        [75, 120, '/longevos'],
    ];

    public static function routeFor(int $edad): string
    {
        foreach (static::$map as [$min, $max, $ruta]) {
            if ($edad >= $min && $edad <= $max) {
                return $ruta;
            }
        }
        return '/error-edad';
    }
}
