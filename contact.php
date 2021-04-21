<?php
///**
// * Created by PhpStorm.
// */
//header("Content-Type:text/html;charset=utf-8");//支持中文
//$action=$_GET['action'];
//
//$user=$_GET['username'];
//$pwd=$_GET['phoneno'];
//echo "这是从web服务器返回的消息，已经经过php处理的！<br />";
//echo "您提交的用户名是：",$user,"<br />";
//echo "您提交的密码是：",$pwd;
//?>
<?php
// create short variable names, also can use '$_REQUEST['name']'
$username = $_POST['username'];
$pwd=$_POST['phoneno'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bob 's Auto Parts - Order Results</title>
</head>
<body>
<?php
echo "<p>您提交的用户名是 ";
echo $username. 'tires<br />';
?>
</body>
</html>

