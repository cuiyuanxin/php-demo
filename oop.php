<?php

/**
* 面向对象 
* 两个重要概念 
* class app 就是一个类
*/
class oop {

	/**
	* 面向对象三大特征
	* 封装 把客观事物封装成一个类，通过修饰符改变类的属性、函数的访问权限，达到保护作用
	* private 私有成员 public 公共 protected 保护成员
	*/
	public $name = '名字';
	public $sex = [
		'男', '女'
	];
	private $eag = 30;
	protected $job = '女公关';

	public function dump() {
		echo $this->name;
	}

}

/**
* 面向对象三大特征
* 继承 子类继承父类 子类可以使用父类的公共属性和方法
*/
class oop1 extends oop {

	public function dump1() {
		var_dump($this->sex);
	}

	/**
	* 面向对象三大特征
	* 多态 覆盖和重载 子类继承父类 子类可以覆盖父类的方法，一个类里可以存在用一个函数名方法，但是参数不一样，结果也不一样
	*/
	public function dump() {
		echo __CLASS__ . '覆盖了父级' . __FUNCTION__ . '的结果';
		echo '<br>';
	}

}

/**
* 面向对象三大特征
* 继承 子类继承父类 子类可以使用父类的公共属性和方法
*/
class oop2 extends oop {

	/**
	* 面向对象三大特征
	* 多态 覆盖和重载 子类继承父类 子类可以覆盖父类的方法，一个类里可以存在同一个函数名的方法，但是参数不一样，结果也不一样
	*/
	public function dump() {
		echo __CLASS__ . '覆盖了父级' . __FUNCTION__ . '的结果';
		echo '<br>';
	}

}

//类是具备某项功能的抽象模型，实际应用中要先实例化(new)后使用，以下就是实例化类，打印$class看到的结果就是对象
$class = new oop();
//object(oop)#1 (2) { ["name"]=> string(6) "名字" ["sex"]=> array(2) { [0]=> string(3) "男" [1]=> string(3) "女" } } 
var_dump($class);
echo '<br>';
//实例化之后就可以调用公共属性(变量)
$name = $class->name;
var_dump($name);
echo '<br>';
//实例化之后就可以调用公共函数(方法)
$class->dump();
echo '<br>';
$class1 = new oop1();
var_dump($class1);
echo '<br>';
$class1->dump1();
echo '<br>';
$class1->dump();
$class2 = new oop2();
var_dump($class2);
echo '<br>';
$class2->dump();


