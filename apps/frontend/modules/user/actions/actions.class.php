<?php

/**
 * user actions.
 *
 * @package    progatecamp
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class userActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }

  public function executeConfirm()
  {
  	$user = new User();
  	$user->setName($this->getRequestParameter('name'));
  	$user->setKana($this->getRequestParameter('kana'));
  	$user->setBirthday($this->getRequestParameter('birthday'));
  	$user->setGender($this->getRequestParameter('gender'));
  	$user->setEmail($this->getRequestParameter('email'));
  	$user->setPhoneNumber($this->getRequestParameter('phone_number'));
  	// $user->setGroup($this->getRequestParameter('group'));
  	// $user->setReason($this->getRequestParameter('reason'));
  	// $user->setUsage($this->getRequestParameter('usage'));
  	$user->save();

  	$this->user = $user;
  }
}
