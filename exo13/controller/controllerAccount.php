<?php 

namespace Controller;

class ControllerAccount extends Controller {

    public function dataToViewAccount() {
        return $this->getView()->setDataSession($_SESSION['id'], $_SESSION['pseudo'], $_SESSION['email'], $_SESSION['role'], $_SESSION['createdAt']);
    }
}