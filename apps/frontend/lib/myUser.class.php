<?php

class myUser extends sfBasicSecurityUser
{
  public function signIn($user)
  {
    $this->setAttribute('member_id', $user->getId(), 'member');
    $this->setAuthenticated(true);
    $this->addCredential('member');
    $this->setAttribute('name', $user->getName(), 'member');

     // ランダムキーを決定する
    if (!$user->getRememberKey())
    {
      $rememberKey = myTools::generate_random_key();

      // キーをUserテーブルに保存する
      $user->setRememberKey($rememberKey);
      $user->save();
    }

    $this->setLoginCookie();
  }

  public function signOut()
  {
    $this->getAttributeHolder()->removeNamespace('member');

    $this->setAuthenticated(false);
    $this->clearCredentials();
    // cookie破棄
    sfContext::getInstance()->getResponse()->setCookie('Progate_user', '', time() - 3600, '/');
  }

  public function getMemberId()
  {
    return $this->getAttribute('member_id', '', 'member');
  }

  public function getMember()
  {
    return UserPeer::retrieveByPk($this->getMemberId());
  }

  public function getName()
  {
    return $this->getAttribute('name', '', 'member');
  }

  public function setLoginCookie()
  {
    $user = $this->getMember();

    // キーをCookieに保存する
    $value = base64_encode(serialize(array($user->getRememberKey(), $user->getEmail())));
    // cookieを３０日間保存
    sfContext::getInstance()->getResponse()->setCookie('Progate_user', $value, time()+60*60*24*30, '/');
  }
}
