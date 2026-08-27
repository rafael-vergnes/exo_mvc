<?php 

namespace Controller;

class ControllerAccount extends Controller {

    public function dataToViewAccount() {
        $this->getView()->setDataSession($_SESSION);
    }
}