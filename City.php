<?php

class City
{
    public static function getCitiesForCountry($country_id)
    {
        $query = "
            SELECT *
            FROM `cities`
            WHERE `country_id` = ?
        ";

        $cities = DB::select($query, ["{$country_id}"], 'City');

        return $cities;
    }

    public $id = null;
    public $name = null;
    public $country_id = null;
    public $district = null;
    public $population = null;
}