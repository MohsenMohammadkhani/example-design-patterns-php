<?php

namespace src\creational\Bulider\RequestBulider;

class Request {
    private $url;
    private $data;
    private $headers;
    private $agent;
    private $method;

    public function __construct(RequestBuilder $requestBuilder) {
        $this->url = $requestBuilder->getUrl();
        $this->data = $requestBuilder->getData();
        $this->headers = $requestBuilder->getHeaders();
        $this->agent = $requestBuilder->getAgent();
        $this->method = $requestBuilder->getMethod();
    }

    public function run() {
        dd($this);
    }
}
