<?php

class WeatherApi
{
    private static $instance;


    private function __construct() {}

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new WeatherApi();
        }
        return self::$instance;
    }

    public function getCurrentWeather($ip)
    {
        $url = "http://api.openweathermap.org/data/2.5/weather?q=Buenos%20Aires,AR&appid=d1fbb42e8396bc008720a5a02f20f7a4
        ";
        $response = @file_get_contents($url);
        if ($response !== false) {
            $data = json_decode($response, true);
            return $data;
        }
        return null;
    }
}
