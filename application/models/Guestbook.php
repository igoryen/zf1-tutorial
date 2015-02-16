<?php

// application/models/Guestbook.php
// 11
class Application_Model_Guestbook {

  protected $_comment;
  protected $_created;
  protected $_email;
  protected $_id;

  // 12
  public function __set($name, $value);
  public function __get($name);

  public function setComment($text);

  public function getComment();

  public function setEmail($email);

  public function getEmail();

  public function setCreated($ts);

  public function getCreated();

  public function setId($id);

  public function getId();
}

class Application_Model_GuestbookMapper {
  // 14
  public function save(Application_Model_Guestbook $guestbook);
  // 13
  public function find($id);
  public function fetchAll();
}
