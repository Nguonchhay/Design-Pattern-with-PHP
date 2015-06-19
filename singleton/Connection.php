<?php
	class Connection {
		static $instance = NULL;

		private function __construct(){}

		public static function getConnection($hostname, $username, $password, $dbName) {
			if (self::$instance === NULL) {
				self::$instance = mysql_connect($hostname, $username, $password);
				mysql_select_db($dbName);
			}
			return self::$instance;
		}
	}
?>
