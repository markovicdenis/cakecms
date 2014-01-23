<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		//'port' => '/Applications/MAMP/tmp/mysql/mysql.sock',
		'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
		'login' => 'root',
		'password' => 'd',
		'database' => 'cakecms',
	);
	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'd',
		'database' => 'cakecms',
	);
	public $cakecms = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		//'port' => '/Applications/MAMP/tmp/mysql/mysql.sock',
		'login' => 'root',
		'password' => 'd',
		'database' => 'cakecms',
	);
}
