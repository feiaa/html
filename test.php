
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>php02</title>
    </head>
<body>
<p>
<?php
include 'lib.php';
// Set up a cookie
// if (isset($_COOKIE['user'])){
// 	echo "hello, ".$_COOKIE['user']."<br />";
// 	setcookie("user", $_COOKIE['user'] + 1);
// 	// $_COOKIE['user'] += 1;
// 	echo $_COOKIE['user']."<br />";
// }
// else {
// 	setcookie("user", "0", time()+100);
// 	echo "Set cookie"."<br />";
// }
// setcookie("user", "", time() - 10);
// 
// Pass and receive parameters.
// file.php?id=xxx&a=xxx
// echo "get parameter ".$_GET["id"]." ".$_GET["a"];
// echo "<br />";
// if ($_GET["a"] == ""){
// 	echo "get null a";
// }
// else {
// 	echo "get a ".$_GET["a"];
// }
// 
// Mysql
$mysqli = connect2mysql();
/* INSERT INTO .. SELECT */
// mysqli_query($conn, "select title, abstract from contests;");
// printf("%s\n", mysqli_info($conn));
$res = $mysqli->query("select contest_id, abstract, title from contests;");
for($row_no = 0; $row_no < $res->num_rows; $row_no++){
	$res->data_seek($row_no);
	$row = $res->fetch_assoc();
	echo $row["contest_id"]." ".$row["title"]." ".$row["abstract"]."<br />";
}
$res = $mysqli->query("select contest_id, abstract, title from contests where contest_id = 1000;");
if(!$res){
	echo "None res <br />";
}
else {
	echo "Res is not none <br />";
}
$nickname = $mysqli->query("select nickname from users where user_id = 1");
$nickname = $nickname->fetch_assoc();
echo $nickname["nickname"]." <br />";
$mysqli->close();
// mysqli_close($con);
echo "string"+"t";
if(3 % 2 == 1){
	echo "string";
}
// define("contest_", value)
echo CONTEST_RESULT_TABLE_PREFIX;
echo "end of line<br />";
// echo CONTEST_RESULT_TABLE_PREFIX;
var_dump(defined('CONTEST_RESULT_TABLE_PREFIX'));
?></p>
</body>
</html>
