<?php

namespace src\structural\bridge\campaign\promotion;

use src\structural\bridge\campaign\Promotion;

class BannerPromotion implements Promotion {

    private $title;
    private $url;
    private $bannerUrl;

    /**
     * @param $title
     * @param $url
     * @param $bannerUrl
     */
    public function __construct($title, $url, $bannerUrl) {
        $this->title = $title;
        $this->url = $url;
        $this->bannerUrl = $bannerUrl;
    }

    public function display() {
        // TODO: Implement display() method.
    }
}
