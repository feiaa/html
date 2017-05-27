<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">
    <?php htmlSidebar(); ?>

    <div class="content">
        <div class="contests">
            <h2><a href="#">图像分类</a></h2>
            <div class="contest">
                <div class="contest-abstract">
                比赛的摘要.
                </div>
                <div class="clearFloat"></div>
                <a href="#" class="contest-more">详情>></a>
            </div>

            <div class="clearFloat"></div>
            <!-- <h2></h2> -->
            <br />
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home"><br /><br /></div>
                <div role="tabpanel" class="tab-pane" id="profile"><br /></div>
                <div role="tabpanel" class="tab-pane" id="messages">...</div>
                <div role="tabpanel" class="tab-pane" id="settings">...</div>
                </div>

            </div>
            <div class="clearFloat"></div>

            <table class="table table-hover">
                <tr>
                    <th>header</th>
                    <th>header</th>
                    <th>header</th>
                    <th>header</th>
                    <th>header</th>
                </tr>
                <!-- On rows -->
                <!-- <tr class="active">...</tr>
                <tr class="success">...</tr>
                <tr class="warning">...</tr>
                <tr class="danger">...</tr>
                <tr class="info">...</tr> -->

                <!-- On cells (`td` or `th`) -->
                <tr>
                  <td class="active">...</td>
                  <td class="success">...</td>
                  <td class="warning">...</td>
                  <td class="danger">...</td>
                  <td class="info">...</td>
                </tr>
            </table>
            <div class="clearFloat"></div>

            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearFloat"></div>
            <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown trigger
                <!-- <span class="caret"></span> -->
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                ...
              </ul>
            </div>
            
<p>Some Bootstrap icons:</p>
<i class="glyphicon glyphicon-cloud"></i>
<i class="glyphicon glyphicon-remove"></i>
<i class="glyphicon glyphicon-user"></i>
<i class="glyphicon glyphicon-envelope"></i>
<i class="glyphicon glyphicon-thumbs-up"></i>
<br><br>

<p>Styled Bootstrap icons (size, color, and shadow):</p>
<i class="glyphicon glyphicon-cloud" style="font-size:24px;"></i>
<i class="glyphicon glyphicon-cloud" style="font-size:36px;"></i>
<span class="glyphicon glyphicon-cloud" style="font-size:36px;"></span>
<i class="glyphicon glyphicon-cloud" style="font-size:48px;color:red;"></i>
<i class="glyphicon glyphicon-cloud" style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>

<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on right
</button>

        <br />
        <div class="clearFloat"></div>
        </div>
    </div>
</div>

<?php htmlFooter(); ?>



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




            <h2 onclick="atest('myModal')">MNIST</h2>
            <div class="contest">
                <div class="contest-abstract">
                <p>
                You have some experience with R or Python and machine learning basics, but you’re new to computer vision. This competition is the perfect introduction to techniques like neural networks using a classic dataset including pre-extracted features.</p><p>
                MNIST ("Modified National Institute of Standards and Technology") is the de facto “hello world” dataset of computer vision. Since its release in 1999, this classic dataset of handwritten images has served as the basis for benchmarking classification algorithms. As new machine learning techniques emerge, MNIST remains a reliable resource for researchers and learners alike.</p><p>
                In this competition, your goal is to correctly identify digits from a dataset of tens of thousands of handwritten images. We’ve curated a set of tutorial-style kernels which cover everything from regression to neural networks. We encourage you to experiment with different algorithms to learn first-hand what works well and how techniques compare.</p>

                </div>
            </div>
            <div class="clearFloat"></div>
            <a href="#." onclick="atest('myModal')" class="contest-more">详情>></a>
            <div class="clearFloat"></div>