<?php

namespace src\creational\Bulider\RequestBulider;

class RequestBuilder {

    private $url;
    private $data;
    private $headers;
    private $agent;
    private $method;

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * @return mixed
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getRequest() {
        return $this->request;
    }




    private $request;

    public static function forge(): RequestBuilder {
        return new RequestBuilder();
    }

    public function withUrl(string $url): RequestBuilder {
        $this->url = $url;
        return $this;
    }

    public function withData(array $data): RequestBuilder {
        $this->data = $data;
        return $this;
    }

    public function withHeaders(array $headers): RequestBuilder {
        $this->headers = $headers;
        return $this;
    }

    public function withMethod(string $method): RequestBuilder {
        $this->method = $method;
        return $this;
    }

    public function withAgent(string $agent): RequestBuilder {
        $this->agent = $agent;
        return $this;
    }

    public function build(): Request {
        return new Request($this);
    }

}
