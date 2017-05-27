<?php
include 'config.php';


function htmlHeader($title){
	echo 
"<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>$title</title> 
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
		<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/mystyle.css\">
	</head>
<body>
<script src=\"js/jquery-3.2.1.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src='js/lib.js'></script>
";
}


function htmlBanner(){
	echo "
<header>
<div class=\"wrap\">
    <div class=\"logo\">
        <a href=\"\"><img src=\"./images/logo.png\" alt=\"NO LOGO\"></a>
    </div>
    <div class=\"clearFloat\"></div>
 </div>
</header>";
}


function htmlSidebar(){
    echo '
    <div class="sidebar">
        <div class="widget">
            <ul>
                <li id="Home"><div><span class="glyphicon glyphicon-home"></span>
                    <a href="index.php">Home</a></div></li>
                <li id="Contests" onmouseover="activateSubmenu(\'#submenuContest\')"
                    onmouseleave="deactivateSubmenu(\'#submenuContest\')"><div><span class="glyphicon glyphicon-tasks"></span>
                    <a href="">Contests</a></div>';
    echo '<span class="submenu">
        <div class="submenuentries" id="submenuContest">
            <ul>
                <li><a href="">contest 1</a></li>
                <li><a href="">contest 2</a></li>
            </ul>
        </div>
    </span>';
    echo '</li>
                <li id="Profile" onmouseover="activateSubmenu(\'#submenuProfile\')"
                    onmouseleave="deactivateSubmenu(\'#submenuProfile\')"><div><span class="glyphicon glyphicon-user"></span>';
                    // 
    echo checkCookie().'</div>';
    // Test
    echo '<span class="submenu">
        <div class="submenuentries" id="submenuProfile">
            <ul>
                <li><a href="">Profile</a></li>
                <li onclick="showLoginModal()"><a >Sign In</a></li>
                <li><a href="./usermanager.php?action=2">Log Out</a></li>
            </ul>
        </div>
    </span>';
    echo '</li>
            </ul>
        </div>
    </div>
    <script>activateSidebar();</script>
    ';
}


function htmlFooter($value=''){
    // modal 
    printf('%s', '<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog"<!--  role="document" --> >
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            <!-- Log In and Register Panel -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#sign-in" data-toggle="tab">Sign In</a></li>
                <li ><a href="#sign-up" data-toggle="tab">Register</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="sign-in">
                    <div class="panel-body">
<form action="./usermanager.php?action=0" method="post" onsubmit="return checkSignin()">
    <div class="form-group">
    <label for="emailLogin">Email address</label>
    <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="passwordLogin">Password</label>
    <input type="password" class="form-control" id="passwordLogin" name="passwdLogin" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default" >Submit</button>
</form>
                    </div>
                </div>
                <div class="tab-pane fade" id="sign-up">
                <div class="panel-body">
<form action="./usermanager.php?action=1" method="post" onsubmit="return checkSignup()">
<!--     <div class="form-group">
    <span class="redFont">注意</span>: 用户名不要超过30个字符!
    </div> -->
    <div class="form-group">
    <label for="nameRegister">Nickname</label>
    <input type="text" class="form-control" name="nameRegister" id="nameRegister" placeholder="Nickname">
    </div>
    <div class="form-group"> 
    <label for="emailRegister">Email Address</label>
    <input type="email" class="form-control" name="emailRegister" id="emailRegister" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="passwordRegister">Password</label>
    <input type="password" class="form-control" name="passwordRegister" id="passwordRegister" placeholder="Password">
    </div>
    <div class="form-group">
    <label for="password2Register">Password Again</label>
    <input type="password" class="form-control" id="password2Register" placeholder="Password Again">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>                    
        </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>');


	echo     
"<div class=\"clearFloat\"></div>
    <footer>
            <div class=\"wrap\">
                <div class=\"about\">
                    <div class=\"title\">About Us</div>
                    <p>To add something.</p>
                </div>
            </div>
    </footer>
</body>
</html>";
}


function connect2mysql(){
    $mysqli = new mysqli(HOSTIP, DATABASEUSER, DATABASEPASSWD, DATABASENAME);
    // $conn = mysqli_connect("localhost", "webuser", "1111");
    if ($mysqli->connect_errno){
        echo "Failed to connect mysql: (".$mysqli->connect_errno.")".$mysqli->connect_error;
        exit();
    }
    return $mysqli;
}


function writeMsg() {
  echo "Hello world!";
}


function not_found(){
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    printf("<h style='font-size:40px'>404 Not Found</h>
        <p>The requested URL was not found on this server.</p>
        ");
    exit();
}


// set is true means to set user cookie.
function checkUser($email, $passwd, $set){
    $mysqli = connect2mysql();

    // echo "select ".USERID.", ".PASSWD." from ".USERS." where ".MAIL." = '$email';";
    $res = $mysqli->query("select ".USERID.", ".PASSWD.", ".USERNAME." from ".USERS." where ".MAIL." = '$email';");

    if($res->num_rows != 1){
        return false;
    }

    $res->data_seek(0);
    $row = $res->fetch_assoc();
    if($set && $row[PASSWD] == $passwd){
        // 86400 * 30 = 1 month
        setcookie(COOKIEUSERID, $row[USERID], time() + 86400 * 30);
        setcookie(COOKIEUSERNAME, $row[USERNAME], time() + 86400 * 30);
    }

    $mysqli->close();

    return $row[PASSWD] == $passwd;
}


// TODO: dynamic allocate user id.
// Need to be efficient.
function allocUserId(){

    $mysqli = connect2mysql();

    $res = $mysqli->query("select count(*) from ".USERS." ;");

    $mysqli->close();

    return $res->fetch_row()[0];
}


// TODO: nickname and name should be different.
function registerUser($nickname, $email, $passwd){
    $mysqli = connect2mysql();

    // Mail has already exis..??
    $res = $mysqli->query("select * from ".USERS." where '$email' = ".MAIL.";");
    echo "select * from ".USERS." where '$email' = ".MAIL.";";
    if(!$res || $res->num_rows != 0){
        $mysqli->close();
        return -1;
    }

    $id = allocUserId();
    $res = $mysqli->query("insert into ".USERS." values($id, '$email', '$passwd', 0, 0, '$nickname', '$nickname');");

    if(!$res){
        $mysqli->close();
        return -2;
    }

    $mysqli->close();
    return 0;  
}


// Check user identity cookies.
// return format:
// <a href="">contents</a>
function checkCookie(){

    if(!isset($_COOKIE[COOKIEUSERID])){
        return '<a style="color:red" href="">NOT LOGIN</a>';
    }

    return '<a >'.$_COOKIE[COOKIEUSERNAME].'</a>';
}


function deleteCookie(){
    if(isset($_COOKIE[COOKIEUSERID])){
        setcookie(COOKIEUSERID, $_COOKIE[COOKIEUSERID], time() - 10);
        setcookie(COOKIEUSERNAME, $_COOKIE[COOKIEUSERNAME], time() - 10);
    }
}

?>