<html>
<head> <title>Калькулятор</title>
</head>
<body>
<?php
if ($_POST==false)
{
echo
"<form action=\"\" method=\"POST\">
  <input type=\"text\" name=\"a\">
  <select name=\"op\">
    <option value=\"add\">+</option>
    <option value=\"sub\">-</option>
    <option value=\"mul\">*</option>
    <option value=\"div\">/</option>
  </select>
  <input type=\"text\" name=\"b\">
  <input type=\"submit\" value=\"=\">
</form>";
}
else
{
$a = isset($_POST["a"]) ? $_POST["a"] : 0;
$b = isset($_POST["b"]) ? $_POST["b"] : 0;
$op = isset($_POST["op"]) ? $_POST["op"] : "add";
if ($op=="add")
print $a+$b;
else if ($op=="sub")
print $a-$b;
else if ($op=="mul")
print $a*$b;
else
print $a/$b;
}
?>
</body>
</html>
