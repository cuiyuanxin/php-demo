<?php

/**
* 面向过程的数据库连接方式
*/


function db($cnf) {

	$config = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'databases' => '',
		'port' => 3306,
		'conding' => 'utf8'
	];

	$rows = array();

	if(isset($cnf) && is_array($cnf)) {
		$config = array_merge($config, $cnf);
	}
	$link = mysqli_connect($config['host'], $config['username'], $config['password'], $config['databases'], $config['port']);
	if(mysqli_connect_errno($link)) {
		die('MySQL数据库连接失败，错误代码ERROR:' . mysqli_connect_errno());
	}
	// if(!$config['databases']) {
	// 	$conding = $config['conding'];
	// 	mysqli_query("SET NAMES '{$condig}'", $link);
	// 	mysqli_select_db($config['databases'], $link);
	// }
	$sql = 'select * from niuniu_user limit 1';
	$query = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	if(mysqli_num_rows($query) > 1) {
		while($row) {
			$rows[] = $row;
		}
	} else {
		$rows = $row;
	}

	var_dump($rows);

	mysqli_close($link);
}


echo '面向过程的数据库连接方式<br>';

$cnf = [
	'host' => '172.17.0.2',
	'username' => 'root',
	'password' => 'cuiyuanxin66666',
	'databases' => 'nndb'
];

db($cnf);




