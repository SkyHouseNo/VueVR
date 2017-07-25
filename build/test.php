<?php
// 指定允许其他域名访问  
header('Access-Control-Allow-Origin:*');  
// 响应类型  
header('Access-Control-Allow-Methods:POST');  
// 响应头设置  
header('Access-Control-Allow-Headers:x-requested-with,content-type');


// var_dump(json_decode($_POST));
var_dump($_REQUEST);


/*ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

$link = mysqli_connect("120.25.81.37:3306","root","dbpassword2017", "activity");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

mysqli_query($link,"set names 'utf8'"); */
/*$type = $_POST['local'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$workName = $_POST['workName'];
$workLink = $_POST['workLink'];
$member = $_POST['member'];


$sql = "insert into user_table (type, name, age, phone, email, work_name, work_link, member, add_date) values( ". $type . ",'" . $name ."',"  . 
	$age . ",'". $phone . "','" . $email . "','" . $workName .
	"','" . $workLink . "','" . $memberName . "','" . $memeberPhone 
	. "','" . $member ."', NOW() )";


$result  = mysqli_query($link,$sql);
*/

// mysqli_free_result($result);
// $link->close();
