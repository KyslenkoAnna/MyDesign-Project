<meta charset="utf-8"> 
<?php
$what="Заявка от клиента";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['city']))			{$city			= $_POST['city'];		if ($city == '')	{unset($city);}}
if (isset($_POST['square']))		{$square		= $_POST['square'];		if ($square == '')	{unset($square);}}
if (isset($_POST['type']))			{$type			= $_POST['type'];		if ($type == '')	{unset($type);}}
if (isset($_POST['style']))			{$style			= $_POST['style'];		if ($style == '')	{unset($style);}}
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['phone']))			{$phone			= $_POST['phone'];		if ($phone == '')	{unset($phone);}}
if (isset($_POST['email']))			{$email			= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($city) ) {
$city=stripslashes($city);
$city=htmlspecialchars($city);
}
if (isset($square) ) {
$square=stripslashes($square);
$square=htmlspecialchars($square);
}
if (isset($type) ) {
$type=stripslashes($type);
$type=htmlspecialchars($type);
}
if (isset($style) ) {
$style=stripslashes($style);
$style=htmlspecialchars($style);
}
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($phone) ) {
$phone=stripslashes($phone);
$phone=htmlspecialchars($phone);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
// адрес почты куда придет письмо
$address="kislenkoa@gmail.com";
// текст письма 
$note_text="Тема: $what \r\n City: $city \r\n Square: $square \r\n Type: $type \r\n Style: $style \r\n Name: $name \r\n Phone: $phone \r\n Email: $email";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name1</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b> $email1</b>.</p>";
}
?>