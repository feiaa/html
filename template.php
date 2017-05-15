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