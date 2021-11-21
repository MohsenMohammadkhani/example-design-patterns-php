<?php
namespace src\structural\proxy\GoogleApi;

interface GoogleMapApiInterface
{
    public function findPlaceByLatLon(string $lat, string $lon);
}
