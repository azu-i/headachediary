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

	//SQL単純実行
	//@param $sql
	//@return SQL実行結果
	public static function query( $sql )
	{
		$return = $this->pdoc->query( $sql );
		return $return;
	}

	//select
	//@param $tableName
	//@param $queries
	//@return select結果
	public static function fetchAll( $tableName, $queries )
	{
		if( !empty($queries) ){
			$sql = sprintf("
				SELECT
				*
				FROM
				%s",
				$tableName
			);
		} else {
			foreach( $queries as $key => $value ){
				$sql = sprintf("
					SELECT
					*
					FROM
					%s
					WHERE
					$s = %s",
					$tableName, $key, $value
				);
			}
		}
		$retrun = $this->pdoc->query( $sql );
		return $return;
	}

	//insert
	//@param $tableName
	//@param $queries(連想配列 カラム名=>値)
	public static function insert($tableName, $queries)
	{
		foreach ($queries as $key => $value) {
			
		}
	}

	public static function update()
	{

	}


}

?>