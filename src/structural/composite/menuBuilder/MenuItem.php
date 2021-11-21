<?php

namespace src\structural\composite\menuBuilder;

class MenuItem implements MenuComponent {


    private $title;
    private $url;

    /**
     * @param $title
     * @param $url
     */
    public function __construct($title, $url) {
        $this->title = $title;
        $this->url = $url;
    }


    public function build() {
        // TODO: Implement build() method.
    }
}
