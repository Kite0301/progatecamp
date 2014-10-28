<?php



class TaskMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TaskMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('task');
		$tMap->setPhpName('Task');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('BODY', 'Body', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DUE_DATE', 'DueDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('COMPLETED_USERS', 'CompletedUsers', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DISPLAY', 'Display', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 