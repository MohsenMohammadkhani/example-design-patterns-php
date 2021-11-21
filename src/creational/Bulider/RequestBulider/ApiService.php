<?php

namespace src\creational\Bulider\RequestBulider;

class ApiService {
    public function fetch() {
        $request = RequestBuilder::forge()->
        withUrl("http://test.com")
            ->withMethod('GET')
            ->withData([
                "" => ""
                ])->
        withHeaders([
            "headersKey1" => "headersValue1"
        ])->withAgent("aaa")->build();
        $request->run();
    }
}
