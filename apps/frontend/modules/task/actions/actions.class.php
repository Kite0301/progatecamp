<?php

/**
 * task actions.
 *
 * @package    progatecamp
 * @subpackage task
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class taskActions extends sfActions
{
  
  public function executeList()
  {
    $c = new Criteria();
    $c->addAscendingOrderByColumn(TaskPeer::DUE_DATE);
    $this->tasks = TaskPeer::doSelect($c);
  }

  public function executeAjax()
  {
    $user_id = $this->getUser()->getMemberId();
    $task_id = $this->getRequestParameter('task_id');

    $user_task = new UserTask();
    $user_task->setUserId($user_id);
    $user_task->setTaskId($task_id);
    $user_task->save();

    return sfView::NONE;
  }
}
