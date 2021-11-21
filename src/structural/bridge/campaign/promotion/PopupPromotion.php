<?php

namespace src\structural\bridge\campaign\promotion;

use src\structural\bridge\campaign\Promotion;

class PopupPromotion implements Promotion {
    private $bannerUrl;
    private $linkLandingPage;

    /**
     * @param $bannerUrl
     * @param $linkLandingPage
     */
    public function __construct($bannerUrl, $linkLandingPage) {
        $this->bannerUrl = $bannerUrl;
        $this->linkLandingPage = $linkLandingPage;
    }

    public function display() {
        // TODO: Implement display() method.
    }
}
