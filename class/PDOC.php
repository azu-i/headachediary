<?php

require_once dirname(__FILE__)."/config.php";

class PDOC
{
	const DSN = "mysql:host=localhost;dbname=headachediary;charset=utf8";
	const USER = "root";
	const PASS = "";

	private $pdoc;

	function __construct()
	{
		$this->pdoc = new PDO(self::DSN, self::USER, self::PASS);
	}

	private function pdoc()
	{
		return $this->pdoc;
	}

	public static function query()
	{
		
	}
}

?>