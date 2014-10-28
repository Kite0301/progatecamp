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

  //一覧
  public function executeList()
  {
    $this->users = UserPeer::doSelect(new Criteria());
  }

  //ログイン
  public function executeLogin()
  {
    if ($this->getUser()->isAuthenticated())
    {
      $this->redirect('@user_list');
    }

    //最初の表示
    if ($this->getRequest()->getMethod() != sfRequest::POST)
    {
      return sfView::SUCCESS;
    }
    //myLoginValidatorでログイン処理
    //フォームから返ってきた場合
    else
    {
      $this->redirect('@user_list');
    }

  }


  //ログアウト
  public function executeLogout()
  {
    $this->getUser()->signOut();

    $this->redirect('@homepage');
  }

  //登録確認画面
  public function executeConfirm()
  {
  	$user = new User();
  	$user->setName($this->getRequestParameter('name'));
  	$user->setKana($this->getRequestParameter('kana'));
  	$birthday = $this->getRequestParameter('year').'-'.$this->getRequestParameter('month').'-'.$this->getRequestParameter('day');
    $user->setBirthday($birthday);
  	$user->setGender($this->getRequestParameter('gender'));
  	$user->setEmail($this->getRequestParameter('email'));
  	$user->setPhoneNumber($this->getRequestParameter('phone_number'));
  	$user->setBackground($this->getRequestParameter('background'));
  	$user->setReason($this->getRequestParameter('reason'));
  	$user->setProspect($this->getRequestParameter('prospect'));
  	$user->save();

    $subject = 'Progate Camp 参加申請';

    $body = $user.'からProgate Campへの参加の申請がありました。';

    myTools::sendMail("info@prog-8.com", $subject, $body);

  	$this->user = $user;
  }

  //バリデーション関連
  public function handleErrorLogin()
  {
    return sfView::SUCCESS;
  }

  public function handleErrorConfirm()
  {
    return $this->forward('top', 'index');
  }
}
