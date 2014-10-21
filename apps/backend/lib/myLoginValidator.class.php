<?php

class myLoginValidator extends sfValidator
{    
  public function initialize($context, $parameters = null)
  {
    // 親クラスを初期化する
    parent::initialize($context);
    
    // デフォルトを設定する
    $this->setParameter('login_error', 'Invalid input');
    
    $this->getParameterHolder()->add($parameters);
    
    return true;
  }
  
  public function execute(&$value, &$error)
  {
    //パスワードを$passwordに格納
    $password_param = $this->getParameter('password');
    $password = $this->getContext()->getRequest()->getParameter($password_param);
    
    //ユーザー名を$valueに格納
    $name = $value;
    
    // ユーザー名が正しいか？
    if ($name == 'progatecamp')
    {
      // passwordはOKか？
      if ($password == 'zeroxone')
      {
        $this->getContext()->getUser()->signIn($name);
        
        return true;
      }
    }
    
    $error = $this->getParameter('login_error');
    return false;
  }
}