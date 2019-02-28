<?php

namespace basics;

//echo不是函数，是PHP语句。可以输出一个或多个简单类型的数据(int、string)
echo '我是个语句我可以输出一个或多个简单类型数据：<br>';
echo 123456, '字符串';
echo '<br>';

//print即使函数又不算是函数，有返回值。可以打印一个简单类型的数据(int、string)
print('我是一个函数可以打印一个简单类型的数据');
echo '<br>';

//不加()也可以打印数据
print '我不加()也可以打印数据';
echo '<br>';

//print_r是函数，有返回值。可以打印复杂类型的数据(array、object)
$array = array('sex' => '男', 'name' => '小崔');
$obj = (object)$array;
print_r($array);
echo '<br>';
print_r($obj);
echo '<br>';

//printf是函数，输出格式化之后的字符串。%s表示的是要转换的字符串
printf('我叫崔元欣，我是%s，我喜欢%s', '94年出生的', '前凸后翘的御姐');
echo '<br>';

//sprintf和printf一样，唯一不同的是它不会直接输出而是要赋值给一个变量
$string = sprintf('我是小崔，我想找一个%s，快来和我愉快的玩耍吧', '可以虐我的御姐');
echo $string;
echo '<br>';

//var_dump是函数，可以打印输出变量的内容、类型、长度，通常用来调试。
$a = '我是小崔';
$b = '我是御姐';
$arr = array('头', '身体', '手', '脚');
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
echo '一整雷电闪过我们居然灵魂交换了';
echo '<br>';
list($a, $b) = array($b, $a);
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
echo '我们拥有相同的器官：';
var_dump($b);
echo '<br>';
var_dump($arr);
echo '<br>';

//EOF(heredoc)是在命令行或程序语言定义一个字符的方法，EOF可以替换其他字符，但是开始和结束必须一致
$name = '，我叫崔元欣';
$eof = <<<EOF
	'我是heredoc'$name
EOF;
echo $eof;
echo '<br>';
$eof = <<<CUI
	我是heredoc，替换了开头和结尾标识$name
CUI;
echo $eof;
echo '<br>';

//integer整型，没有小数,包含正负数，可以是十六进制和八进制
echo 1;
echo '<br>';
echo -1;
echo '<br>';
echo 0x8c;
echo '<br>';
echo 047;
echo '<br>';

//string字符串，一个字符是一串字符的序列，可以把任何字符放到单双引号里
echo '我是字符串';
echo '<br>';

//float浮点型，
var_dump(3.1415926);
echo '<br>';
var_dump(-3.1415926);
echo '<br>';

//boolean布尔型 true或false
echo true, false;
echo '<br>';

//array数组
$arr = array(1,2,3,4,5);
var_dump($arr);
echo '<br>';

//object对象
class obj {
	public $num = 1;
	private function __construt() {
		echo $this->num;
	}
	public function name() {
		echo '嘿嘿！';
	}
}
var_dump(new obj);
echo '<br>';

//null空值
var_dump(null);
echo '<br>';

//define定义常量
define('NAME', '我叫崔元欣');
echo NAME;
echo '<br>';

//.拼接字字符串
echo '我叫崔元欣' . '，我喜欢御姐';
echo '<br>';

/**
* 运算符 算术运算符
* +相加、-相减、*乘法、/除法、%除法取余、.连接两个字符串、intdiv()整除
*/

//加法
echo 1 + 2;
echo '<br>';

//减法
echo 2 - 1;
echo '<br>';

//乘法
echo 2 * 1;
echo '<br>';

//除法 
echo 400 / 2;
echo '<br>';

//除法取余 相当于4 - 1 * 3 = 1
echo 4 % 3;
echo '<br>'; 

//400的后两位0会被过滤掉  也就是4 - 1 * 3 = 1
echo 400 % 3;
echo '<br>'; 

//-4代表的是取反 -4 - 1 * 3 = -1
echo -4 % 3;
echo '<br>'; 

//intdiv()整除 PHP7+新增运算符
var_dump(intdiv(100, 3));
echo '<br>'; 

/**
* 赋值运算符
* =赋值、+=相加、-=相减、*=相乘、/=相除、%=除法取余、.=连接两个字符串
*/

//相加
$x = 10;
echo $x;
echo '<br>';
$x += 10;
echo $x;
echo '<br>';
$x -= 5;
echo $x;
echo '<br>';
$x *= 10;
echo $x;
echo '<br>';
$x /= 50;
echo $x;
echo '<br>';
$x %= 3;
echo $x;
echo '<br>';
$x .= '我是连接符';
echo $x;
echo '<br>';

/**
* 递增、递减运算符
* ++i(先i+1，返回i)、i++(先返回i，i+1)、--i(先i-1，返回i)、i--(先i-1，返回i)
*/

$x = 10;
echo ++$x;
echo '<br>';
$y = 10;
echo $y++;
echo '<br>';
$z = 10;
echo --$z;
echo '<br>';
$c = 10;
echo $c--;
echo '<br>';

/**
* 比较运算符
* ==相等、===绝对相等、!=不等、!==绝对不等、<>不等、<小于、>大于、<=小于等于、>=大于等于
*/

$x = 100;
$y = '100';
$a = null;
$b = false;
$c = 10;

//相等
var_dump($x == $y); //true
echo '<br>';
var_dump($a == $b); //true
echo '<br>';
//绝对相等
var_dump($x === $y); //false
echo '<br>';
var_dump($a === $b); //false
echo '<br>';
var_dump($x === 100); //true
echo '<br>';
//不相等
var_dump($x != $y); //false
echo '<br>';
//绝对不相等
var_dump($x !== $y); //true
echo '<br>';
//不相等
var_dump($x <> $y); //false
echo '<br>';
//小于
var_dump($c < $x); //true
echo '<br>';
var_dump($c < $y); //true
echo '<br>';
//大于
var_dump($x > $c); //true
echo '<br>';
var_dump($y > $c); //true
echo '<br>';
//小于等于
var_dump($x >= $c); //true
echo '<br>';
//大于等于
var_dump($c <= $y); //true
echo '<br>';

/**
* 逻辑运算符
* and与、or或、xor异或、&&与、||或、!非
*/

$x = 100;
$y = 200;

//与
var_dump($x == 100 and $y == 200); //true
echo '<br>';
var_dump($x == 100 and $y === '200'); //false
echo '<br>';
//或
var_dump($x == 100 or $y == 200); //true
echo '<br>';
var_dump($x == 100 or $y === '200'); //false
echo '<br>';
//异或
var_dump($x === 100 xor $y === 200); //false
echo '<br>';
var_dump($x === 100 xor $y === '200'); //true
echo '<br>';
//与
var_dump($x === 100 && $y === 200); //true
echo '<br>';
var_dump($x === 100 && $y === '200'); //false
echo '<br>';
//或
var_dump($x === 100 || $y === 100); //true
echo '<br>';
var_dump($x === 100 || $y === '200'); //true
echo '<br>';
var_dump($x === '100' || $y === '200'); //false
echo '<br>';
//非
var_dump(!($x == $y)); //true
echo '<br>';
var_dump(!($x == 100)); //false
echo '<br>';

/**
* 数组运算符
* +集合、==相等、===恒等、!=不相等、!==不恒等、<>不相等
*/

$arr = array('name' => '崔元欣', 'sex' => '男');
$arr1 = array('name' => '御姐', 'sex' => '女');
$arr2 = array('names' => '崔元欣、御姐', 'sexs' => '男、女');
$arr3 = array('name' => '崔元欣', 'sex' => '男');
//集合
var_dump($arr + $arr1);//键名一样不合并
echo '<br>';
var_dump($arr + $arr2);//键名不一样合并为一个集合
echo '<br>';
var_dump($arr == $arr1); //false
echo '<br>';
var_dump($arr == $arr3); //true
echo '<br>';
var_dump($arr === $arr1); //false
echo '<br>';
var_dump($arr === $arr3); //true
echo '<br>';
var_dump($arr != $arr1); //true
echo '<br>';
var_dump($arr != $arr3); //false
echo '<br>';
var_dump($arr !== $arr1); //true
echo '<br>';
var_dump($arr !== $arr3); //false
echo '<br>';
var_dump($arr <> $arr1); //true
echo '<br>';
var_dump($arr <> $arr3); //false
echo '<br>';

/**
* 三元运算符
* 格式 $test = $a == $b ? '相等' : '不相等';
* PHP7+多了一个null合并运算符??
*/

$x = 100;
$y = isset($x) && $x === 100 ? '条件成立。' : '条件不成立。';
var_dump($y);
echo '<br>';
$y = isset($x) && $x === '100' ? '条件成立。' : '条件不成立。';
var_dump($y);
echo '<br>';
//PHP7+ null合并运算符??
$a = $x ?? '条件不成立。'; //$x值存在返回$x，不存在返回条件不成立
var_dump($a);
echo '<br>';
$a = $xx ?? '条件不成立。'; //$xx值存在返回$xx，不存在返回条件不成立
var_dump($a);
echo '<br>';

/**
* 组合运算符
* PHP7+新增组合运算符也称太空船运算符，运算符格式：<=>。组合运算符可以轻松比较两个变量，不仅限于数值类比较。
* 组合运算符解析：$x = $a <=> $b
* $a > $b，则$c = 1
* $a == $b，则$c = 0
* $a < $b，则$c = -1
*/

echo 1 <=> 1;
echo '<br>';
echo 1 <=> 2;
echo '<br>';
echo 2 <=> 1;
echo '<br>';
echo array(1, 2) <=> array(1, 2);
echo '<br>';
echo array(1, 2) <=> array(3, 4);
echo '<br>';
echo array(3, 4) <=> array(1, 2);
echo '<br>';

/**
* if...elseif...else和switch，根据条件判断去执行不同动作
*/

//if...elseif...else
function funIf($x) {
	if(isset($x) && $x === 1000) {
		echo '结果相等';
	} elseif($x !== '御姐') {
		echo '小样';
	} else {
		echo '呵呵，我是默认值';
	}
}
funIf(100);
echo '<br>';
funIf(1000);
echo '<br>';
funIf('御姐');
echo '<br>';
$x = array(1, 2, 3, 4, 5);
for($i = 0; $i < count($x); $i++) {
	switch($x[$i]) {
		case 1:
			echo '我是小一';
			echo '<br>';
			break;
		case 2:
			echo '我是小二';
			echo '<br>';
			break;
		case 3:
			echo '我是小三';
			echo '<br>';
			break;
		case 4:
			echo '我是小四';
			echo '<br>';
			break;
		default:
			echo '我是默认值小五';
			echo '<br>';
			break;
	}
}

/**
* PHP循环方式
* while、do...while、for、foreach
*/
$i = 1;
while($i < 10) {
	echo $i . '<br>';
	$i++;
}

$i = 1;
do {
	$i++;
	echo $i . '<br>';
} 
while($i < 10);

$x = array('崔元欣', '男', '25');
for($i = 0; $i < count($x); $i++) {
	echo $x[$i] . '<br>';
}

$x = array('name' => '崔元欣', 'sex' => '男', 'age' => '25');
$string = '';
foreach($x as $key => $value) {
	switch($key) {
		case 'name':
			$string = $string . '我叫' . $value . '，';
			break;
		case 'sex':
			$string = $string . '我是纯爷们' . $value . '性，';
			break;
		case 'age':
			$string = $string . '今年' . $value . '岁，';
		 break;
	}
}
$string .= '喜欢御姐。';
echo $string;
echo '<br>';

/**
* 魔术常量
* __LINE__文件当前行号、__DIR__文件所在目录、__CLASS__当前类名、__FUNCTION__当前函数名、__FILE__当前文件完整路径和文件名、__NAMESPACE__当前命名空间、__TRAIT__复用方法traits、__METHOD__当前类名和方法名
*/

echo __LINE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo __FILE__;
echo '<br>';
class test {
	function className() {
		echo __CLASS__;
		echo '<br>';
		echo __FUNCTION__;
		echo '<br>';
		echo __METHOD__;
		echo '<br>';
		echo __NAMESPACE__;
		echo '<br>';
	}
}

trait test1 {
	function className() {
		parent::className();
		echo '复用<br>';
	}
}

class test2 extends test {
	use test1;
}
$class = new test();
$class->className();
echo '<br>';
$class = new test2();
$class->className();
echo '<br>';

/**
* inclode()、require()、include_once()、require_once()
* 文件包含
*/
include './basics-include.php';

require './basics-require.php';







