<?php

class GuestbookController extends Zend_Controller_Action {

  public function init() {
    /* Initialize action controller here */
  }

  public function indexAction() {
    //echo "hI!!!";
    $guestbook = new Application_Model_GuestbookMapper();
    var_dump($guestbook);
    $this->view->entries = $guestbook->fetchAll();
  }

}
