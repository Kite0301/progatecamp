<?php
// auto-generated by sfPropelCrud
// date: 2014/10/22 16:38:29
?>
<?php

/**
 * task actions.
 *
 * @package    progatecamp
 * @subpackage task
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class taskActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('task', 'list');
  }

  public function executeList()
  {
    $this->tasks = TaskPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->task = TaskPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->task);
  }

  public function executeCreate()
  {
    $this->task = new Task();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->task = TaskPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->task);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $task = new Task();
    }
    else
    {
      $task = TaskPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($task);
    }

    $task->setTitle($this->getRequestParameter('title'));
    $task->setBody($this->getRequestParameter('body'));
    $due_date = $this->getRequestParameter('year').'-'.$this->getRequestParameter('month').'-'.$this->getRequestParameter('day');
    $task->setDueDate($due_date);
    $task->setDisplay($this->getRequestParameter('display'));
    $task->setId($this->getRequestParameter('id'));

    $task->save();

    return $this->redirect('task/show?id='.$task->getId());
  }

  public function executeDelete()
  {
    $task = TaskPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($task);

    $task->delete();

    return $this->redirect('task/list');
  }
}
