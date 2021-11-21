<?php
namespace src\structural\proxy\GoogleApi;

class GoogleMapApiProxy implements GoogleMapApiInterface
{
    private $googleMapApi;

    public function __construct(GoogleMapApiInterface $googleMapApi)
    {
        $this->googleMapApi = $googleMapApi;
    }

    public function findPlaceByLatLon(string $lat, string $lon)
    {
        if (env('APP_ENV') == 'production') {
            return $this->googleMapApi->findPlaceByLatLon($lat, $lon);
        }
        return null;
    }
}
