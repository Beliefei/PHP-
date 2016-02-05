<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$x = 5;
$y = 7;
$z = $x+$y;

echo $z;

// 变量以$符号开始，后面跟着变量的名称
// 变量必须以数字或者下划线开始
// 变量名只能包含数字字母以及下划线
// 变量名不能包含空格
// 变量名区分大小写
//
//
//
// PHP没有声明变量的命令
// PHP是一门弱语言类型
// PHP会自动把变量转换成对应的类型
//

//PHP变量的作用域有四种
//
//local
//global
//static
//parameter

//-----------------------------------------------------
$a = 5;//全局变量
function myTest() {

	$b = 10;//局部变量
	echo "<p>Test variables inside the function:<p>";
	echo "Variable a is: $a";
	echo "<br>";
	echo "Variable b is: $b";
}

myTest();

echo "<p>Test variables outside the function:<p>";
echo "Variable a is :$a";
echo "<br>";
echo "Variable b is :$b";

//------------------------PHP global关键字-----------
$n = 5;
$m = 10;
function myTestSecond() {
	global $n, $m;
	$n = $n+$m;
}

myTestSecond();
echo $n;//15

//PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。
//index 保存变量的名称。
//这个数组可以在函数内部访问，也可以直接用来更新全局变量。
//所以上边的myTestSecond也可以写成以下形式

function myTestThird() {
	$GLOBALS['n'] = $GLOBALS['n']+$GLOBALS['m'];
	echo "aaaa";
}

//----------------------------Statics 作用域---------

function testStatics() {
	static $s = 0;
	echo $s;
	$s++;
}

testStatics();
testStatics();
testStatics();
//然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。

//-----------------------------参数作用域----------------
//参数是通过调用代码将值传递给函数的局部变量。
//参数是在参数列表中声明的，作为函数声明的一部分：
function mytestParams($x) {
	echo $x;
}

mytestParams(6);

?>







</body>
</html>