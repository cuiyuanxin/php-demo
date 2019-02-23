<?php

class db {

	//私有link变量
	private $link;

	private $config = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'databases' => '',
		'port' => 3306,
		'conding' => 'utf8'
	];


	//私有的静态变量，默认值为null
	private static $instance = null;

	/**
	* 私有构造方法
	* 防止多个实例
	* array $config 数据库配置
	*/
	private function __construct($config) {
		//判断$config配置是否设置，并且是数组
		if(isset($config) && is_array($config)) {
			//存在配置，和默认配置合并，用新的配置替换默认配置
			$this->config = array_merge($this->config, $config);
		}
		//创建数据库连接
		$this->link = mysqli_connect($this->config['host'], $this->config['username'], $this->config['password'], $this->config['databases'], $this->config['port']);

		//输出连接错误
		$this->connect_errno();

		if($this->config['databases']) {
			$conding = $this->config['conding'];
			$this->query("SET NAMES '{$condig}'");
		}
		
		return $this->link;
	}

	/**
	* 私有克隆方法 
	* 防止多个实例
	*/
	private function __clone() {

	}

	/**
	* 防止反序列化
	*/
	private function __wakeup() {

	}

	/**
	* 公有静态方法
	* 判断$instance是否实例化，存在实例化对象就直接返回，不存在实例化对象就new实例化
	* array $config 数据库配置
	*/
	public static function getInstance($config) {
		//判断变量$instance是否存在实例化对象，不存在
		if(is_null(self::$instance)) {
			//自动实例化，给构建方法传$config配置
			self::$instance = new self($config);
		}
		//返回$instance实例化对象
		return self::$instance;
	}

	/**
	* 执行sql
	* $query sql语句
	*/
	public function query($query) {
		$this->result = mysqli_query($this->link, $query);
		return $this->result;
	}

	/**
	* 选择数据库
	* string $dbname 数据库名称
	*/
	public function select_db($dbname) {
		$this->result = mysqli_select_db($this->link, $dbname);
		$conding = $this->config['conding'];
		$this->query("SET NAMES '{$condig}'");
		return $this->result;
	}

	/**
	* 查询一条或多条数据
	* string $sql sql语句
	* MYSQLI_NUM、MYSQLI_ASSOC、MYSQLI_BOTH
	*/
	public function fetch_array($sql, $type = MYSQLI_BOTH) {
		$result = $this->query($sql);
		$rows = mysqli_fetch_array($result, $type);
		if($this->num_rows($result) > 1) {
			while($rows) {
				$this->rows[] = $rows;
			}
		} else {
			$this->rows = $rows;
		}
		return $this->rows;
	}

	public function num_rows($result) {
		$this->result = mysqli_num_rows($result);
		return $this->result;
	}

	/**
	* 输出连接错误
	*/
	private function connect_errno() {
		if(mysqli_connect_errno($this->link)) {
			echo 'MySQL数据库连接失败，错误代码ERROR:' . mysqli_connect_errno() . '<br>';
		}
	}

	/**
	* 关闭数据库连接
	*/
	public function close() {
		$this->result = mysqli_close($this->link);
		return $this->result;
	}


}

$config = [
	'host' => '172.17.0.2',
	'username' => 'root',
	'password' => 'cuiyuanxin66666',
	// 'databases' => 'nndb'
];
$db = db::getInstance($config);
$db1 = db::getInstance($config);
//判断两个实例对象是否一致
if($db === $db1) {
	echo '一致';
	echo '<br>';
} else {
	echo '不一致';
	echo '<br>';
}
//切换数据库hkxy
$db->select_db('hkxy');
$sql = 'select * from qii_admin_menu limit 1';
$rows = $db->fetch_array($sql, MYSQLI_ASSOC);
var_dump($db);
echo '<br>-----------------------------------------<br>';
var_dump($rows);
echo '<br>-----------------------------------------<br>';
$db->select_db('nndb');
$sql = 'select * from niuniu_user limit 1';
$rows = $db->fetch_array($sql, MYSQLI_ASSOC);
var_dump($rows);


