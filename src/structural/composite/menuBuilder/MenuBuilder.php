<?php

namespace src\structural\composite\menuBuilder;

class MenuBuilder {

    public function buildMenu() {
        $menuItem1 = new MenuItem('google.com', 'http://google.com');
        $menuItem2 = new MenuItem('uber.com', 'http://uber.com');
        $menuItem3 = new MenuItem('amazon.com', 'http://amazon.com');

        $menu = new MenuCollections();
        $subMenu = new MenuCollections();
        $menu->add($menuItem1);
        $menu->add($menuItem2);
        $menu->add($menuItem3);
        $menu->add($subMenu);
        $menu->build();
    }
}
