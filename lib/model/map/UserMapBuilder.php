<?php



class UserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('user');
		$tMap->setPhpName('User');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 60);

		$tMap->addColumn('KANA', 'Kana', 'string', CreoleTypes::VARCHAR, false, 60);

		$tMap->addColumn('BIRTHDAY', 'Birthday', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('GENDER', 'Gender', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 60);

		$tMap->addColumn('PHONE_NUMBER', 'PhoneNumber', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('GROUP', 'Group', 'string', CreoleTypes::VARCHAR, false, 60);

		$tMap->addColumn('REASON', 'Reason', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('USAGE', 'Usage', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CONFIRM', 'Confirm', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('FACEBOOK_ID', 'FacebookId', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TWITTER_ID', 'TwitterId', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DISPLAY', 'Display', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 