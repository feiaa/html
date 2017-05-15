<?php

define("CONTEST_RESULT_TABLE_PREFIX", "CONTEST_RESULT_");

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
                    onmouseleave="deactivateSubmenu(\'#submenuProfile\')"><div><span class="glyphicon glyphicon-user"></span>
                    <a href="">Profile</a></div>';
    // Test
    echo '<span class="submenu">
        <div class="submenuentries" id="submenuProfile">
            <ul>
                <li><a href="">Sign In</a></li>
                <li><a href="">Sign Up</a></li>
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
    $mysqli = new mysqli("localhost", "webuser", "1111", "webdata");
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

?>