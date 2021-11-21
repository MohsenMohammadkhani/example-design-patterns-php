<?php

namespace src\structural\bridge\campaign\campaign;

use src\structural\bridge\campaign\Campaign;

class PPCCampaign extends Campaign {

    public function run() {
        $this->promotion->display();
    }
}
