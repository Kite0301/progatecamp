<?php


abstract class BaseTask extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $title;


	
	protected $body;


	
	protected $due_date;


	
	protected $completed_users = 0;


	
	protected $display;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $collUserTasks;

	
	protected $lastUserTaskCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getTitle()
	{

		return $this->title;
	}

	
	public function getBody()
	{

		return $this->body;
	}

	
	public function getDueDate($format = 'Y-m-d H:i:s')
	{

		if ($this->due_date === null || $this->due_date === '') {
			return null;
		} elseif (!is_int($this->due_date)) {
						$ts = strtotime($this->due_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [due_date] as date/time value: " . var_export($this->due_date, true));
			}
		} else {
			$ts = $this->due_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCompletedUsers()
	{

		return $this->completed_users;
	}

	
	public function getDisplay()
	{

		return $this->display;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getId()
	{

		return $this->id;
	}

	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = TaskPeer::TITLE;
		}

	} 
	
	public function setBody($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->body !== $v) {
			$this->body = $v;
			$this->modifiedColumns[] = TaskPeer::BODY;
		}

	} 
	
	public function setDueDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [due_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->due_date !== $ts) {
			$this->due_date = $ts;
			$this->modifiedColumns[] = TaskPeer::DUE_DATE;
		}

	} 
	
	public function setCompletedUsers($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->completed_users !== $v || $v === 0) {
			$this->completed_users = $v;
			$this->modifiedColumns[] = TaskPeer::COMPLETED_USERS;
		}

	} 
	
	public function setDisplay($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->display !== $v) {
			$this->display = $v;
			$this->modifiedColumns[] = TaskPeer::DISPLAY;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = TaskPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = TaskPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TaskPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->title = $rs->getString($startcol + 0);

			$this->body = $rs->getString($startcol + 1);

			$this->due_date = $rs->getTimestamp($startcol + 2, null);

			$this->completed_users = $rs->getInt($startcol + 3);

			$this->display = $rs->getInt($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->id = $rs->getInt($startcol + 7);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Task object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TaskPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TaskPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TaskPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TaskPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TaskPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TaskPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TaskPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUserTasks !== null) {
				foreach($this->collUserTasks as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = TaskPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUserTasks !== null) {
					foreach($this->collUserTasks as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TaskPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getTitle();
				break;
			case 1:
				return $this->getBody();
				break;
			case 2:
				return $this->getDueDate();
				break;
			case 3:
				return $this->getCompletedUsers();
				break;
			case 4:
				return $this->getDisplay();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getUpdatedAt();
				break;
			case 7:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TaskPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getTitle(),
			$keys[1] => $this->getBody(),
			$keys[2] => $this->getDueDate(),
			$keys[3] => $this->getCompletedUsers(),
			$keys[4] => $this->getDisplay(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
			$keys[7] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TaskPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setTitle($value);
				break;
			case 1:
				$this->setBody($value);
				break;
			case 2:
				$this->setDueDate($value);
				break;
			case 3:
				$this->setCompletedUsers($value);
				break;
			case 4:
				$this->setDisplay($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setUpdatedAt($value);
				break;
			case 7:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TaskPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setTitle($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setBody($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDueDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompletedUsers($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDisplay($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setId($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TaskPeer::DATABASE_NAME);

		if ($this->isColumnModified(TaskPeer::TITLE)) $criteria->add(TaskPeer::TITLE, $this->title);
		if ($this->isColumnModified(TaskPeer::BODY)) $criteria->add(TaskPeer::BODY, $this->body);
		if ($this->isColumnModified(TaskPeer::DUE_DATE)) $criteria->add(TaskPeer::DUE_DATE, $this->due_date);
		if ($this->isColumnModified(TaskPeer::COMPLETED_USERS)) $criteria->add(TaskPeer::COMPLETED_USERS, $this->completed_users);
		if ($this->isColumnModified(TaskPeer::DISPLAY)) $criteria->add(TaskPeer::DISPLAY, $this->display);
		if ($this->isColumnModified(TaskPeer::CREATED_AT)) $criteria->add(TaskPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TaskPeer::UPDATED_AT)) $criteria->add(TaskPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(TaskPeer::ID)) $criteria->add(TaskPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TaskPeer::DATABASE_NAME);

		$criteria->add(TaskPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setTitle($this->title);

		$copyObj->setBody($this->body);

		$copyObj->setDueDate($this->due_date);

		$copyObj->setCompletedUsers($this->completed_users);

		$copyObj->setDisplay($this->display);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUserTasks() as $relObj) {
				$copyObj->addUserTask($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TaskPeer();
		}
		return self::$peer;
	}

	
	public function initUserTasks()
	{
		if ($this->collUserTasks === null) {
			$this->collUserTasks = array();
		}
	}

	
	public function getUserTasks($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserTaskPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserTasks === null) {
			if ($this->isNew()) {
			   $this->collUserTasks = array();
			} else {

				$criteria->add(UserTaskPeer::TASK_ID, $this->getId());

				UserTaskPeer::addSelectColumns($criteria);
				$this->collUserTasks = UserTaskPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserTaskPeer::TASK_ID, $this->getId());

				UserTaskPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserTaskCriteria) || !$this->lastUserTaskCriteria->equals($criteria)) {
					$this->collUserTasks = UserTaskPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserTaskCriteria = $criteria;
		return $this->collUserTasks;
	}

	
	public function countUserTasks($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserTaskPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserTaskPeer::TASK_ID, $this->getId());

		return UserTaskPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserTask(UserTask $l)
	{
		$this->collUserTasks[] = $l;
		$l->setTask($this);
	}


	
	public function getUserTasksJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserTaskPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserTasks === null) {
			if ($this->isNew()) {
				$this->collUserTasks = array();
			} else {

				$criteria->add(UserTaskPeer::TASK_ID, $this->getId());

				$this->collUserTasks = UserTaskPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(UserTaskPeer::TASK_ID, $this->getId());

			if (!isset($this->lastUserTaskCriteria) || !$this->lastUserTaskCriteria->equals($criteria)) {
				$this->collUserTasks = UserTaskPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastUserTaskCriteria = $criteria;

		return $this->collUserTasks;
	}

} 