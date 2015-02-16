<?php
// 1
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{
  // 4
  protected function _initDoctype(){
    $this->bootstrap('view'); // 6
    $view = $this->getResource('view'); // 7
    $view->doctype('XHTML1_STRICT'); // 8
  }

}

