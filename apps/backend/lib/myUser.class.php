<?php

class myUser extends sfBasicSecurityUser
{
  public function signIn($user)
  {
    $this->setAuthenticated(true);

    $this->addCredential('admin');
  }

  public function signOut()
  {
    $this->setAuthenticated(false);
    $this->clearCredentials();
  }
}
