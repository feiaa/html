<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">
    <?php htmlSidebar(); ?>
    
    <div class="content">
        <div class="contests">
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
        </div>
    </div>
</div>

<?php htmlFooter(); ?>