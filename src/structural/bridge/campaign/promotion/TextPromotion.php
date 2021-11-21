<?php

namespace src\structural\bridge\campaign\promotion;

use src\structural\bridge\campaign\Promotion;

class TextPromotion implements Promotion   {
    private $text;
    private $url;

    /**
     * @param $text
     * @param $url
     */
    public function __construct($text, $url) {
        $this->text = $text;
        $this->url = $url;
    }


    public function display() {
        // TODO: Implement display() method.
    }
}
