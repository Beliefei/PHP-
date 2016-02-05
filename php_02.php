<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
/*
echo 和 print 区别:
echo - 可以输出一个或多个字符串
print - 只允许输出一个字符串，返回值总为 1
提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。
 */
//echo 是一个语言结构，使用的时候可以不用加括号，也可以加上括号： echo 或 echo()。
//
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";
//--------echo 命令输出变量和字符创
$txt1 = "Learn PHP";
$txt2 = "w3cschool.cc";
$cars = array("Volvo", "BMW", "Toyota");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "My car is a {$cars[0]}";

//---------------
print"<h2>PHP is fun!</h2>";
print"Hello world!<br>";
print"I'm about to learn PHP!";
print$txt1;
print"<br>";
print"Study PHP at $txt2";
print"My car is a {$cars[0]}";
?>

</body>
</html>