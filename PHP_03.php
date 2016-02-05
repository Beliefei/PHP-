<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//对象
//对象数据类型也可以用于存储数据。
//在 PHP 中，对象必须声明。
//首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。
//然后我们在类中定义数据类型，然后在实例化的类中使用数据类型
//
class Car {
	var $color;
	function Car($color = "green") {
		$this->color = $color;
	}
	function what_color() {
		return $this->color;
	}
}
//PHP关键字this就是指向当前对象实例的指针，不指向任何其他对象或类。

/*
NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。
NULL 值指明一个变量是否为空值。 同样可用于数据空值和NULL值的区别。
可以通过设置变量值为 NULL 来清空变量数据
 */

$x = "hellow";
$x = null;
var_dump($x);

//常量
//常量值被定义后，在脚本的其他任何地方都不能被改变。

/*
常量是一个简单值的标识符。该值在脚本中不能改变。
一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。
注意： 常量在整个脚本中都可以使用。
 */

define('GREETING', 'welcome to Chinese!', true);//true 表示大小写不敏感

echo GREETING;

function test() {

	echo GREETING;
}

test();

//连接字符串可以用点
$text1 = "aaaaaaaa";
$text2 = "bbbbbbbb";
echo $text1." ".text2;
echo strlen($text2);

echo strpos($text2.$text1, $text1);
/*
strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
 */

$x = 10;
$y = 6;
echo ($x+$y);// 输出16
echo ($x-$y);// 输出4
echo ($x*$y);// 输出60
echo ($x/$y);// 输出1.6666666666667
echo ($x%$y);// 输出4

$x = 10;
echo $x;// 输出10

$y = 20;
$y += 100;
echo $y;// 输出120

$z = 50;
$z -= 25;
echo $z;// 输出25

$i = 5;
$i *= 6;
echo $i;// 输出30

$j = 10;
$j /= 5;
echo $j;// 输出2

$k = 15;
$k %= 4;
echo $k;// 输出3

$x = 10;
echo ++$x;// 输出11

$y = 10;
echo $y++;// 输出10

$z = 5;
echo --$z;// 输出4

$i = 5;
echo $i--;// 输出5

$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a = 50;
$b = 90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);

//数组运算符
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x+$y;// $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

/*
另一个条件运算符是"?:"（或三元）运算符 。
语法格式
(expr1) ? (expr2) : (expr3)
对 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。
自 PHP 5.3 起，可以省略三元运算符中间那部分。表达式 expr1 ?: expr3
在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。

 */
$test = '菜鸟教程';
// 普通写法
$username = isset($test)?$test:'nobody';
echo $username, PHP_EOL;

// PHP 5.3+ 版本写法
$username = $test?:'nobody';
echo $username, PHP_EOL;

//PHP7+ 支持组合比较符，实例如下：
// 整型
/*
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
 */


?>

</body>
</html>