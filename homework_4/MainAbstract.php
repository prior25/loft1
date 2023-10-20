<?php
abstract class MainAbstract implements TariffInterface
{
    public $distance;
    protected $price_km;
    protected $price_min;
    public $trip_time;

    private function __construct($user_distance, $user_time)
    {
        $this->distance = $user_distance;
        $this->trip_time = $user_time;
    }

    public function calcprice () {

        $price_km = $this->distance * $this->price_km;
        $price_min = $this->trip_time * $this->price_min;
        $result = $price_km + $price_min;
        return $result;

    }



}
