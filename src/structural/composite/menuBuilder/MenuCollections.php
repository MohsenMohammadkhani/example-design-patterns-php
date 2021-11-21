<?php

namespace src\structural\composite\menuBuilder;

class MenuCollections implements MenuComponent {

    private $menuItems = [];

    public function add(MenuComponent $menuComponent) {
        $this->menuItems[] = $menuComponent;
    }

    public function build() {
        echo "<div class=''>";
        foreach ($this->menuItems as $menuItem) {
            $menuItem->build();
        }
        echo "</div>";
    }
}
