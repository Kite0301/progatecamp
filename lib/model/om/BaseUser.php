<?php


abstract class BaseUser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $name;


	
	protected $kana;


	
	protected $birthday;


	
	protected $gender;


	
	protected $email;


	
	protected $phone_number;


	
	protected $group;


	
	protected $reason;


	
	protected $usage;


	
	protected $confirm = 0;


	
	protected $facebook_id;


	
	protected $twitter_id;


	
	protected $display;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getKana()
	{

		return $this->kana;
	}

	
	public function getBirthday($format = 'Y-m-d H:i:s')
	{

		if ($this->birthday === null || $this->birthday === '') {
			return null;
		} elseif (!is_int($this->birthday)) {
						$ts = strtotime($this->birthday);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [birthday] as date/time value: " . var_export($this->birthday, true));
			}
		} else {
			$ts = $this->birthday;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getGender()
	{

		return $this->gender;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getPhoneNumber()
	{

		return $this->phone_number;
	}

	
	public function getGroup()
	{

		return $this->group;
	}

	
	public function getReason()
	{

		return $this->reason;
	}

	
	public function getUsage()
	{

		return $this->usage;
	}

	
	public function getConfirm()
	{

		return $this->confirm;
	}

	
	public function getFacebookId()
	{

		return $this->facebook_id;
	}

	
	public function getTwitterId()
	{

		return $this->twitter_id;
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

	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = UserPeer::NAME;
		}

	} 
	
	public function setKana($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->kana !== $v) {
			$this->kana = $v;
			$this->modifiedColumns[] = UserPeer::KANA;
		}

	} 
	
	public function setBirthday($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [birthday] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->birthday !== $ts) {
			$this->birthday = $ts;
			$this->modifiedColumns[] = UserPeer::BIRTHDAY;
		}

	} 
	
	public function setGender($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = UserPeer::GENDER;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = UserPeer::EMAIL;
		}

	} 
	
	public function setPhoneNumber($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone_number !== $v) {
			$this->phone_number = $v;
			$this->modifiedColumns[] = UserPeer::PHONE_NUMBER;
		}

	} 
	
	public function setGroup($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->group !== $v) {
			$this->group = $v;
			$this->modifiedColumns[] = UserPeer::GROUP;
		}

	} 
	
	public function setReason($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reason !== $v) {
			$this->reason = $v;
			$this->modifiedColumns[] = UserPeer::REASON;
		}

	} 
	
	public function setUsage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->usage !== $v) {
			$this->usage = $v;
			$this->modifiedColumns[] = UserPeer::USAGE;
		}

	} 
	
	public function setConfirm($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->confirm !== $v || $v === 0) {
			$this->confirm = $v;
			$this->modifiedColumns[] = UserPeer::CONFIRM;
		}

	} 
	
	public function setFacebookId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->facebook_id !== $v) {
			$this->facebook_id = $v;
			$this->modifiedColumns[] = UserPeer::FACEBOOK_ID;
		}

	} 
	
	public function setTwitterId($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->twitter_id !== $v) {
			$this->twitter_id = $v;
			$this->modifiedColumns[] = UserPeer::TWITTER_ID;
		}

	} 
	
	public function setDisplay($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->display !== $v) {
			$this->display = $v;
			$this->modifiedColumns[] = UserPeer::DISPLAY;
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
			$this->modifiedColumns[] = UserPeer::CREATED_AT;
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
			$this->modifiedColumns[] = UserPeer::UPDATED_AT;
		}

	} 
	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserPeer::ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->name = $rs->getString($startcol + 0);

			$this->kana = $rs->getString($startcol + 1);

			$this->birthday = $rs->getTimestamp($startcol + 2, null);

			$this->gender = $rs->getString($startcol + 3);

			$this->email = $rs->getString($startcol + 4);

			$this->phone_number = $rs->getString($startcol + 5);

			$this->group = $rs->getString($startcol + 6);

			$this->reason = $rs->getString($startcol + 7);

			$this->usage = $rs->getString($startcol + 8);

			$this->confirm = $rs->getInt($startcol + 9);

			$this->facebook_id = $rs->getString($startcol + 10);

			$this->twitter_id = $rs->getString($startcol + 11);

			$this->display = $rs->getInt($startcol + 12);

			$this->created_at = $rs->getTimestamp($startcol + 13, null);

			$this->updated_at = $rs->getTimestamp($startcol + 14, null);

			$this->id = $rs->getInt($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UserPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(UserPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
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
					$pk = UserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getName();
				break;
			case 1:
				return $this->getKana();
				break;
			case 2:
				return $this->getBirthday();
				break;
			case 3:
				return $this->getGender();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getPhoneNumber();
				break;
			case 6:
				return $this->getGroup();
				break;
			case 7:
				return $this->getReason();
				break;
			case 8:
				return $this->getUsage();
				break;
			case 9:
				return $this->getConfirm();
				break;
			case 10:
				return $this->getFacebookId();
				break;
			case 11:
				return $this->getTwitterId();
				break;
			case 12:
				return $this->getDisplay();
				break;
			case 13:
				return $this->getCreatedAt();
				break;
			case 14:
				return $this->getUpdatedAt();
				break;
			case 15:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getName(),
			$keys[1] => $this->getKana(),
			$keys[2] => $this->getBirthday(),
			$keys[3] => $this->getGender(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getPhoneNumber(),
			$keys[6] => $this->getGroup(),
			$keys[7] => $this->getReason(),
			$keys[8] => $this->getUsage(),
			$keys[9] => $this->getConfirm(),
			$keys[10] => $this->getFacebookId(),
			$keys[11] => $this->getTwitterId(),
			$keys[12] => $this->getDisplay(),
			$keys[13] => $this->getCreatedAt(),
			$keys[14] => $this->getUpdatedAt(),
			$keys[15] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setName($value);
				break;
			case 1:
				$this->setKana($value);
				break;
			case 2:
				$this->setBirthday($value);
				break;
			case 3:
				$this->setGender($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setPhoneNumber($value);
				break;
			case 6:
				$this->setGroup($value);
				break;
			case 7:
				$this->setReason($value);
				break;
			case 8:
				$this->setUsage($value);
				break;
			case 9:
				$this->setConfirm($value);
				break;
			case 10:
				$this->setFacebookId($value);
				break;
			case 11:
				$this->setTwitterId($value);
				break;
			case 12:
				$this->setDisplay($value);
				break;
			case 13:
				$this->setCreatedAt($value);
				break;
			case 14:
				$this->setUpdatedAt($value);
				break;
			case 15:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setName($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setKana($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBirthday($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setGender($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPhoneNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setGroup($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setReason($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUsage($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setConfirm($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFacebookId($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTwitterId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDisplay($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedAt($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setUpdatedAt($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setId($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::NAME)) $criteria->add(UserPeer::NAME, $this->name);
		if ($this->isColumnModified(UserPeer::KANA)) $criteria->add(UserPeer::KANA, $this->kana);
		if ($this->isColumnModified(UserPeer::BIRTHDAY)) $criteria->add(UserPeer::BIRTHDAY, $this->birthday);
		if ($this->isColumnModified(UserPeer::GENDER)) $criteria->add(UserPeer::GENDER, $this->gender);
		if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(UserPeer::PHONE_NUMBER)) $criteria->add(UserPeer::PHONE_NUMBER, $this->phone_number);
		if ($this->isColumnModified(UserPeer::GROUP)) $criteria->add(UserPeer::GROUP, $this->group);
		if ($this->isColumnModified(UserPeer::REASON)) $criteria->add(UserPeer::REASON, $this->reason);
		if ($this->isColumnModified(UserPeer::USAGE)) $criteria->add(UserPeer::USAGE, $this->usage);
		if ($this->isColumnModified(UserPeer::CONFIRM)) $criteria->add(UserPeer::CONFIRM, $this->confirm);
		if ($this->isColumnModified(UserPeer::FACEBOOK_ID)) $criteria->add(UserPeer::FACEBOOK_ID, $this->facebook_id);
		if ($this->isColumnModified(UserPeer::TWITTER_ID)) $criteria->add(UserPeer::TWITTER_ID, $this->twitter_id);
		if ($this->isColumnModified(UserPeer::DISPLAY)) $criteria->add(UserPeer::DISPLAY, $this->display);
		if ($this->isColumnModified(UserPeer::CREATED_AT)) $criteria->add(UserPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(UserPeer::UPDATED_AT)) $criteria->add(UserPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		$criteria->add(UserPeer::ID, $this->id);

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

		$copyObj->setName($this->name);

		$copyObj->setKana($this->kana);

		$copyObj->setBirthday($this->birthday);

		$copyObj->setGender($this->gender);

		$copyObj->setEmail($this->email);

		$copyObj->setPhoneNumber($this->phone_number);

		$copyObj->setGroup($this->group);

		$copyObj->setReason($this->reason);

		$copyObj->setUsage($this->usage);

		$copyObj->setConfirm($this->confirm);

		$copyObj->setFacebookId($this->facebook_id);

		$copyObj->setTwitterId($this->twitter_id);

		$copyObj->setDisplay($this->display);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new UserPeer();
		}
		return self::$peer;
	}

} 