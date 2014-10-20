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
  public function executeList()
  {
    $this->users = UserPeer::doSelect(new Criteria());
  }

  //詳細
  public function executeShow()
  {
    $this->user = UserPeer::retrieveByPk($this->getRequestParameter('id'));
  }

  //ログイン
  public function executeLogin()
  {
    //最初の表示の場合
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

    $this->redirect('@login');
  } 


  //バリデーション関連
  public function handleErrorLogin()
  {
    return sfView::SUCCESS;
  }
}
