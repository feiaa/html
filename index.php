<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">

    <?php htmlSidebar(); ?>
    
    <div class="content">
        <div class="contests">

            <h2 onclick="atest('myModal')">图像分类</h2>
            <div class="contest">
                <div class="contest-abstract">
                比赛的摘要..
                </div>
            </div>
            <div class="clearFloat"></div>
            <a href="#." onclick="atest('myModal')" class="contest-more">详情>></a>
            <div class="clearFloat"></div>
           
            <?php
            $mysqli = connect2mysql();
            $res = $mysqli->query("select contest_id, abstract, title from contests;");
            for($row_no = 0; $row_no < $res->num_rows; $row_no++){
                $res->data_seek($row_no);
                $row = $res->fetch_assoc();
                $contest_link = "contest.php?id=".$row["contest_id"];
                printf("<h2>%s</h2>
                    <div class=\"contest\">
                        <div class=\"contest-abstract\">
                        %s
                        </div>
                    </div>
                    <div class=\"clearFloat\"></div>
                    <a href=\"%s\" class=\"contest-more\">详情>></a>
                    <div class=\"clearFloat\"></div>
                    ", $row["title"], $row["abstract"], $contest_link);
            }
            $mysqli->close();
            ?>

        </div>
    </div>
</div>

<!-- Modal -->
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
</div>

<?php htmlFooter(); ?>